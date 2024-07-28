import React, { useState } from 'react';
import MainLayout from '@/Layouts/MainLayout';

const Messages = () => {
    const [isEmail, setIsEmail] = useState(false);
    const [messages, setMessages] = useState([
        { id: 1, text: 'Hello, how can I help you?', type: 'received' },
        { id: 2, text: 'I need assistance with my account.', type: 'sent' },
    ]);
    const [newMessage, setNewMessage] = useState('');

    const handleSendMessage = () => {
        if (newMessage.trim() === '') return;

        setMessages([...messages, { id: messages.length + 1, text: newMessage, type: 'sent' }]);
        setNewMessage('');
    };

    return (
        <MainLayout title="Messages">
            <div className="flex flex-col h-full">
                {/* App Bar */}
                <div className="flex items-center justify-between p-4 bg-gray-800 text-white">
                    <h1 className="text-xl font-bold">Messages</h1>
                    <div className="flex gap-6">
                        <div
                            className={`border h-10 w-20 text-center rounded place-content-center ${
                                isEmail ? 'text-slate-800 font-bold bg-white' : 'text-white font-bold bg-slate-800'
                            }`}
                            onClick={() => setIsEmail(false)}
                        >
                            Message
                        </div>
                        <div
                            className={`border h-10 w-20 text-center rounded place-content-center ${
                                isEmail ? 'text-white font-bold bg-slate-800' : 'text-slate-800 font-bold bg-white'
                            }`}
                            onClick={() => setIsEmail(true)}
                        >
                            Email
                        </div>
                    </div>
                </div>

                {/* Messaging Section */}
                <div className="flex flex-grow overflow-hidden">
                    <div className="h-[500px] p-2 w-[24%] m-3 rounded-lg bg-white">
                        <div className="flex w-50 rounded pl-2 place-items-center bg-slate-100 h-12">
                            <div className="rounded-full bg-cyan-400 h-9 w-9"></div>
                            <div className="pl-2">
                                <div className="m-0">Ademola</div>
                                <div className="text-[10px] m-0">I have not received the money</div>
                            </div>
                        </div>
                    </div>
                    <div className="flex flex-col h-[500px] w-[80%] m-3 rounded-lg bg-white p-4">
                        {isEmail ? (
                            <div className="flex flex-col gap-4">
                                <div>
                                    <label className="block text-gray-700 text-sm font-bold mb-2" htmlFor="email">
                                        Email
                                    </label>
                                    <input
                                        id="email"
                                        type="email"
                                        className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        placeholder="Enter recipient's email"
                                    />
                                </div>
                                <div>
                                    <label className="block text-gray-700 text-sm font-bold mb-2" htmlFor="subject">
                                        Subject
                                    </label>
                                    <input
                                        id="subject"
                                        type="text"
                                        className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        placeholder="Enter subject"
                                    />
                                </div>
                                <div>
                                    <label className="block text-gray-700 text-sm font-bold mb-2" htmlFor="body">
                                        Message
                                    </label>
                                    <textarea
                                        id="body"
                                        className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-48"
                                        placeholder="Enter your message"
                                    ></textarea>
                                </div>
                                <div className="flex items-center justify-between">
                                    <button
                                        className="bg-[#285B35] hover:bg-[#2d8142] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                        type="button"
                                    >
                                        Send
                                    </button>
                                </div>
                            </div>
                        ) : (
                            <div className="flex flex-col flex-grow overflow-auto">
                                <div className="flex flex-col gap-2 p-2">
                                    {messages.map((message) => (
                                        <div
                                            key={message.id}
                                            className={`p-2 rounded-lg max-w-[80%] ${
                                                message.type === 'received' ? 'bg-gray-200 self-start' : 'bg-[#285B35] text-white self-end'
                                            }`}
                                        >
                                            {message.text}
                                        </div>
                                    ))}
                                </div>
                                <div className="flex p-2 border-t">
                                    <input
                                        type="text"
                                        className="flex-grow p-2 border rounded"
                                        placeholder="Type a message..."
                                        value={newMessage}
                                        onChange={(e) => setNewMessage(e.target.value)}
                                    />
                                    <button
                                        className="bg-[#285B35] hover:bg-[#2d8142] text-white font-bold py-2 px-4 rounded ml-2"
                                        type="button"
                                        onClick={handleSendMessage}
                                    >
                                        Send
                                    </button>
                                </div>
                            </div>
                        )}
                    </div>
                </div>
            </div>
        </MainLayout>
    );
};

export default Messages;
