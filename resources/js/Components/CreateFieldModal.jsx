import axios from 'axios';
import React, { useState } from 'react';

const CreateFieldsModal = ({ closeModal }) => {
    const [name, setName] = useState('');
    const [color, setColor] = useState('#ffffff'); // Default color
    const [size, setSize] = useState(0); // Default size

    const handleSubmit = async (e) => {
        e.preventDefault(); // Prevent the default form submission behavior
    
        try {
            const respond = await axios.post("create-field", {
                name, // The name of the field
                color, // The color of the field
                size, // The size of the field

                headers: { 'Content-Type': 'application/json' }
            });
            console.log('Response:', respond.data); // Log the response data
        } catch (error) {
            console.error('Error creating field:', error); 
            
            
            // Log any errors that occur

            if (error.response) {
                // Server responded with a status code other than 2xx
                console.error('Error response:', error.response.data);
            } else if (error.request) {
                // Request was made but no response received
                console.error('No response received:', error.request);
            } else {
                // Something else happened
                console.error('Error setting up request:', error.message);
            }
        }
    
        console.log('Creating field:', { name, color, size });
        
        // Add logic here to close the modal after submission, if necessary
     closeModal();
    };

    return (
        <div className="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
            <div className="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
                <h2 className="text-xl font-bold mb-4">Create New Field</h2>
                <form onSubmit={handleSubmit}>
                    <div className="mb-4">
                        <label className="block text-sm font-medium mb-1">Field Name</label>
                        <input
                            type="text"
                            value={name}
                            onChange={(e) => setName(e.target.value)}
                            className="border p-2 w-full"
                            required
                        />
                    </div>
                    <div className="mb-4">
                        <label className="block text-sm font-medium mb-1">Field Color</label>
                        <input
                            type="color"
                            value={color}
                            onChange={(e) => setColor(e.target.value)}
                            className="border p-2 w-full"
                        />
                    </div>
                    <div className="mb-4">
                        <label className="block text-sm font-medium mb-1">Field Size</label>
                        <input
                            type="number"
                            value={size}
                            onChange={(e) => setSize(Number(e.target.value))}
                            className="border p-2 w-full"
                            required
                        />
                    </div>
                    <div className="flex justify-end gap-4">
                        <button
                            type="button"
                            onClick={closeModal}
                            className="p-2 bg-gray-300 text-gray-700 rounded"
                        >
                            Cancel
                        </button>
                        <button
                            type="submit"
                            className="p-2 bg-[#285B35] text-white rounded"
                        >
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
};

export default CreateFieldsModal;
