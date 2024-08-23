import React, { useState, useEffect, useRef } from 'react';
import io from 'socket.io-client';
import MessageInput from './MessageInput';
import { XMarkIcon } from '@heroicons/react/24/outline';
import axios from 'axios';

const Chat = ({ user, setShowChat, conversation }) => {
    const [messages, setMessages] = useState([]);
    const [admin, setAdmin] = useState(null);
    const [admins, setAdmins] = useState([]);
    const [hasAdmin, setHasAdmin] = useState(false);
    const [typingMessage, setTypingMessage] = useState('');
    const scroll = useRef(null);
    const socket = useRef(null); // Socket instance as a ref to persist between renders

    // Fetch admin details from local storage
    const getAdminDetails = () => {
        const adminDetails = localStorage.getItem('adminDetails');
        return adminDetails ? JSON.parse(adminDetails) : null;
    };

    // Scroll to the bottom of the messages
    const scrollToBottom = () => {
        if (scroll.current) {
            scroll.current.scrollIntoView({ behavior: "smooth" });
        }
    };

    // Function to handle connecting and joining rooms
    const connectWebSocket = () => {
        if (!socket.current) {
            socket.current = io('https://realtime.smalltin.com:3000'); // Initialize the socket connection only once
        }

        // Leave the previous room before joining the new one
        if (conversation?.id) {
            socket.current.emit('leaveChat');
            socket.current.emit('joinChat', conversation.id);
        }

        socket.current.on(`typing/${conversation?.id}`, (user) => {
            setTypingMessage(`${user.username} is typing...`);
        });

        socket.current.on(`stopTyping/${conversation?.id}`, () => {
            setTypingMessage('');
        });

        socket.current.on(`message/${conversation?.id}`, (message) => {
            setMessages((prevMessages) => [...prevMessages, message]);
            scrollToBottom();
        });
    };

    // Fetch messages for the conversation
    const fetchMessages = async (conversationId) => {
        try {
            const response = await axios.get(`chats/${conversationId}`, {
                headers: { 'Content-Type': 'application/json' }
            });
            setMessages(response.data.messages);
            setAdmins(response.data.admins);
            setHasAdmin(response.data.admins.length > 0);
            scrollToBottom();
        } catch (error) {
            console.error("Error fetching messages:", error);
        }
    };

    // Assign an admin to the conversation
    const assignAdminToConversation = async (conversationId, adminId) => {
        try {
            await axios.post(`chats/${conversationId}/assign`, {
                admin_id: adminId,
            }, {
                headers: { 'Content-Type': 'application/json' },
            });
            fetchMessages(conversationId);
        } catch (error) {
            console.error("Error assigning admin:", error);
        }
    };

    // Effect to handle socket connection and fetching messages when conversation changes
    useEffect(() => {
        const adminDetails = getAdminDetails();
        setAdmin(adminDetails);

        if (conversation?.id) {
            fetchMessages(conversation.id);
            connectWebSocket();
        }

        // Cleanup function to leave the room and disconnect socket on unmount
        return () => {
            if (socket.current) {
                socket.current.emit('leaveChat');
                socket.current.disconnect();
                socket.current = null; // Set to null to ensure reconnection if the component remounts
            }
        };
    }, [conversation?.id]);

    // Function to send a message and update the state optimistically
    const sendMessageAsAdmin = async (conversationId, messageText) => {
        const message = { message: messageText, sender: admin };
        
        // Optimistically update the UI
        setMessages((prevMessages) => [...prevMessages, { ...message, id: new Date().getTime() }]);
        
        try {
            // Emit the message via Socket.IO
            socket.current.emit('message', conversationId, message);
    
            // Send the message to the database
            await sendToDatabase(conversationId, messageText);
        } catch (error) {
            console.error("Error sending message:", error);
            // Handle the error, maybe remove the message or show a retry option
        }
    };
    
    const sendToDatabase = async (conversationId, messageText) => {
        try {
            const response = await axios.post(`chats/${conversationId}/message`, {
                message: messageText,
            }, {
                headers: { 'Content-Type': 'application/json' },
            });
            console.log("Message stored:", response.data);
        } catch (error) {
            console.error("Error storing message in the database:", error);
            throw error;  // Rethrow so the error can be handled in sendMessageAsAdmin
        }
    };
    

    const handleSendMessage = (messageText) => {
        const message = { message: messageText, id: new Date().getTime(), sender: { email: admin?.email } };
        // setMessages((prevMessages) => [...prevMessages, message]);  
        sendMessageAsAdmin(conversation?.id, messageText);
    };

    const handleTyping = () => {
        socket.current.emit('typing', conversation?.id, admin);
    };

    const handleStopTyping = () => {
        socket.current.emit('stopTyping', conversation?.id);
    };

    const handleJoin = () => {
        if (conversation && admin) {
            assignAdminToConversation(conversation.id, admin.id);
        }
    };

    const isCurrentAdminInConversation = admins.some(a => a.id === admin?.id);

    return conversation || user ? (
        <div className="flex flex-col flex-grow h-full">
            <div className='flex justify-between items-center p-2 bg-[#285B35] text-white'>
                <div className='flex items-center'>
                    <div className='h-9 w-9 bg-white rounded-full mr-2'></div>
                    <div>{user ? user.username : conversation.user.username}</div>
                </div>
                {setShowChat && (
                    <button onClick={() => setShowChat(false)}>
                        <XMarkIcon className="h-6 w-6" />
                    </button>
                )}
                {!isCurrentAdminInConversation && (
                    <div className='flex justify-end p-2'>
                        <button
                            className='px-4 py-2 text-[#285B35] bg-white rounded-2xl'
                            onClick={handleJoin}
                        >
                            Join
                        </button>
                    </div>
                )}
            </div>
            <div className="flex flex-col flex-grow gap-2 p-2 overflow-auto">
                {messages.map((message) => (
                    <div
                        key={message.id}
                        className={`p-2 rounded-lg max-w-[80%] ${
                            message.sender.email === admin?.email ? 'bg-gray-200 self-end' : 'bg-[#285B35] text-white self-start'
                        }`}
                    >
                        {message.message}
                    </div>
                ))}
                {typingMessage && (
                    <div className="text-gray-500">{typingMessage}</div>
                )}
                <div ref={scroll} />
            </div>
            {isCurrentAdminInConversation ? (
                <MessageInput
                    onSendMessage={handleSendMessage}
                    onTyping={handleTyping}
                    onStopTyping={handleStopTyping}
                />
            ) : (
                <div className='flex p-2 w-full'>
                    <button
                        className='py-2 w-full bg-[#285B35] text-white rounded'
                        onClick={handleJoin}
                    >
                        Join
                    </button>
                </div>
            )}
        </div>
    ) : (
        <div className='flex items-center justify-center h-full'>
            No Message Available
        </div>
    );
};

export default Chat;
