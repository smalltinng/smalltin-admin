import React, { useState } from 'react';

const MessageInput = ({ onSendMessage }) => {
    const [input, setInput] = useState('');

    const handleChange = (e) => {
        setInput(e.target.value);
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        if (input.trim() !== '') {
            onSendMessage(input);
            setInput('');
        }
    };

    return (
        <form onSubmit={handleSubmit} className="flex p-2 border-t border-gray-200">
            <input
                type="text"
                value={input}
                onChange={handleChange}
                className="flex-grow p-2 border rounded-l-lg focus:outline-none"
                placeholder="Type a message..."
            />
            <button type="submit" className="px-4 py-2 bg-[#285B35] text-white rounded-r-lg">
                Send
            </button>
        </form>
    );
};

export default MessageInput;
