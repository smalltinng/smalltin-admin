import React from 'react';

const Email = () => {
    return (
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
    );
};

export default Email;
