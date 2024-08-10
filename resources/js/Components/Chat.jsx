import React, { useState, useEffect, useRef } from 'react';
import MessageInput from './MessageInput';
import { XMarkIcon } from '@heroicons/react/24/outline';
import axios from 'axios';
// import echo from './echo'; 

const Chat = ({ chatChannel, user, setShowChat, conversation }) => {
    const [messages, setMessages] = useState([]);
    const [admin, setAdmin] = useState(null);
    const [admins, setAdmins] = useState([]);
    const [hasAdmin, setHasAdmin] = useState(false);
    const scroll = useRef(null);

    const getAdminDetails = () => {
        const adminDetails = localStorage.getItem('adminDetails');
        return adminDetails ? JSON.parse(adminDetails) : null;
    };

    const scrollToBottom = () => {
        if (scroll.current) {
            scroll.current.scrollIntoView({ behavior: "smooth" });
        }
    };

    const connectWebSocket = () => {
        window.Echo.channel(`chats.${conversation?.id}`)
            .listen('GotMessage', async (e) => {
               // await fetchMessages(conversation?.id);
            console.log("conected");
            });
    };

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

    useEffect(() => {
        const adminDetails = getAdminDetails();
        setAdmin(adminDetails);
        if (conversation?.id) {
            fetchMessages(conversation.id);
            connectWebSocket();
        }
        return () => {
            if (chatChannel) {
                chatChannel.off('message');
            }
        };
    }, [chatChannel, conversation?.id]);

    const sendMessageAsAdmin = async (conversationId, messageText) => {
        try {
            await axios.post(`chats/${conversationId}/message`, {
                message: messageText,
            }, {
                headers: { 'Content-Type': 'application/json' },
            });
        } catch (error) {
            console.error("Error sending message:", error);
        }
    };

    const handleSendMessage = (messageText) => {
        const message = { message: messageText, id: new Date().getTime(), sender: { email: admin?.email } };
        setMessages((prevMessages) => [...prevMessages, message]);  // Optimistic UI update
        sendMessageAsAdmin(conversation?.id, messageText);
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
                <div ref={scroll} />
            </div>
            {isCurrentAdminInConversation ? (
                <MessageInput onSendMessage={handleSendMessage} />
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
