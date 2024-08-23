import React, { useState, useEffect } from 'react';
import io from 'socket.io-client'; // Import Socket.IO client
import MainLayout from '@/Layouts/MainLayout';
import Chat from '@/Components/Chat';
import Email from '@/Components/Email';
import axios from 'axios';
import moment from 'moment';
import ConversationCard from '@/Components/ConversationCard';

const socket = io('https://realtime.smalltin.com:3000'); // Replace with your actual Socket.IO server URL

const Messages = () => {
    const [isEmail, setIsEmail] = useState(false);
    const [chatChannel, setChatChannel] = useState(null);
    const [typeMessage, setTypeMessage] = useState(true);
    const [pendingConversation, setPendingConversation] = useState([]);
    const [recentMessage, setRecentMessage] = useState([]);
    const [selectedConversation, setSelectedConversation] = useState(null);

    const handleShowChat = (user) => {
        setSelectedConversation(user);
    };

    const getAllConversation = async () => {
        try {
            const response = await axios.get("chats", {
                headers: { 'Content-Type': 'application/json' }
            });
            setRecentMessage(response.data.data);
        } catch (error) {
            console.log(error);
        }
    };

    const getAllUnConversation = async () => {
        try {
            const response = await axios.get("unchats", {
                headers: { 'Content-Type': 'application/json' }
            });
            setPendingConversation(response.data.data);
        } catch (error) {
            console.log(error);
        }
    };

    useEffect(() => {
        getAllConversation();
        getAllUnConversation();
        setChatChannel("");

        // Listen for incoming messages
        socket.on('new_message', (as) => {
            getAllUnConversation();
            getAllConversation(); // Fetch all conversations again when a new message is received
        });

        // Clean up the event listener on component unmount
        return () => {
            socket.off('new_message');
        };
    }, []);

    return (
        <MainLayout title="Messages">
            <div className="flex flex-col h-full">
                {/* App Bar */}
                <div className="flex items-center justify-between p-4 bg-[#285B35] text-white">
                    <h1 className="text-xl font-bold">Messages</h1>
                    <div className="flex gap-6">
                        <div
                            className={`border h-10 w-20 text-center rounded place-content-center ${!isEmail ? 'text-slate-800 font-bold bg-white' : 'text-white font-bold bg-slate-800'}`}
                            onClick={() => setIsEmail(false)}
                        >
                            Message
                        </div>
                        <div
                            className={`border h-10 w-20 text-center rounded place-content-center ${isEmail ? 'text-slate-800 font-bold bg-white' : 'text-white font-bold bg-slate-800'}`}
                            onClick={() => setIsEmail(true)}
                        >
                            Email
                        </div>
                    </div>
                </div>

                {/* Messaging Section */}
                <div className="flex flex-grow overflow-hidden">
                    {/* Conversation list: visible on mobile if no conversation is selected */}
                    <div className={`h-[500px] ${selectedConversation ? 'hidden md:block' : 'block'} w-full md:w-[24%] m-3 rounded-lg bg-white`}>
                        <div className='flex gap-2 text-xs font-bold p-2'>
                            <button onClick={() => setTypeMessage(true)} className={typeMessage ? "text-black border-2 border-black rounded-3xl bg-slate-200 p-2" : "text-gray-400 rounded-3xl bg-white p-2 border-2 border-black"}>Recent</button>
                            <button onClick={() => setTypeMessage(false)} className={typeMessage ? "text-gray-400 border-2 border-black rounded-3xl bg-white p-2" : "text-black rounded-3xl border-2 border-black bg-slate-200 p-2"}>Pending</button>
                        </div>
                        <div className='p-2'>
                            {typeMessage ? recentMessage.length < 1 ? <div>No Recent Messages</div> : recentMessage.map(conversation => (
                                <button key={conversation.id} onClick={() => handleShowChat(conversation)}>
                                    <ConversationCard selectedConversation={selectedConversation} conversation={conversation} />
                                </button>
                            )) : pendingConversation.map(conversation => (
                                <button key={conversation.id} onClick={() => handleShowChat(conversation)}>
                                    <ConversationCard selectedConversation={selectedConversation} conversation={conversation} />
                                </button>
                            ))}
                        </div>
                    </div>
                    {/* Chat view: hidden on mobile if no conversation is selected */}
                    <div className={`flex flex-col h-[500px] w-full md:w-[80%] m-3 rounded-lg bg-white ${!selectedConversation ? 'hidden md:block' : ''}`}>
                        {isEmail ? <Email /> : <Chat chatChannel={chatChannel} conversation={selectedConversation} />}
                    </div>
                </div>
            </div>
        </MainLayout>
    );
};

export default Messages;
