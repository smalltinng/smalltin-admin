import React, { useState } from 'react';

const MessageInput = ({ onSendMessage, onTyping, onStopTyping }) => {
    const [message, setMessage] = useState('');

    const handleInputChange = (e) => {
        setMessage(e.target.value);
        onTyping();
        if (e.target.value === '') {
            onStopTyping();
        }
    };

    const handleSendMessage = () => {
        if (message.trim() !== '') {
            onSendMessage(message);
            setMessage('');
            onStopTyping(); // Stop typing once the message is sent
        }
    };

    return (
        <div className="flex items-center p-2 border-t">
            <input
                type="text"
                value={message}
                onChange={handleInputChange}
                className="flex-grow p-2 border rounded"
                placeholder="Type a message..."
                onBlur={onStopTyping} // Stop typing when input loses focus
            />
            <button
                onClick={handleSendMessage}
                className="ml-2 px-4 py-2 text-white bg-[#285B35] rounded"
            >
                Send
            </button>
        </div>
    );
};

export default MessageInput;
