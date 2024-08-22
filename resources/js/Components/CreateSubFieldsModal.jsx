import React, { useState } from 'react';

const CreateSubFieldsModal = ({ closeModal, fields }) => {
    const [name, setName] = useState('');
    const [selectedField, setSelectedField] = useState('');
    const [size, setSize] = useState(0); // Default size
    const [color, setColor] = useState('#ffffff'); // Default color

    const handleSubmit = (e) => {
        e.preventDefault();
        // Add logic to handle form submission (e.g., API call to create a new subfield)
        console.log('Creating subfield:', { name, selectedField, size, color });
        // Close the modal after submitting
        closeModal();
    };

    return (
        <div className="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
            <div className="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
                <h2 className="text-xl font-bold mb-4">Create New Subfield</h2>
                <form onSubmit={handleSubmit}>
                    <div className="mb-4">
                        <label className="block text-sm font-medium mb-1">Subfield Name</label>
                        <input
                            type="text"
                            value={name}
                            onChange={(e) => setName(e.target.value)}
                            className="border p-2 w-full"
                            required
                        />
                    </div>
                    <div className="mb-4">
                        <label className="block text-sm font-medium mb-1">Select Field</label>
                        <select
                            value={selectedField}
                            onChange={(e) => setSelectedField(e.target.value)}
                            className="border p-2 w-full"
                            required
                        >
                            <option value="" disabled>Select a field</option>
                            {fields.map(field => (
                                <option key={field.id} value={field.id}>
                                    {field.name}
                                </option>
                            ))}
                        </select>
                    </div>
                    <div className="mb-4">
                        <label className="block text-sm font-medium mb-1">Subfield Size</label>
                        <input
                            type="number"
                            value={size}
                            onChange={(e) => setSize(Number(e.target.value))}
                            className="border p-2 w-full"
                            required
                        />
                    </div>
                    <div className="mb-4">
                        <label className="block text-sm font-medium mb-1">Subfield Color</label>
                        <input
                            type="color"
                            value={color}
                            onChange={(e) => setColor(e.target.value)}
                            className="border p-2 w-full"
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

export default CreateSubFieldsModal;
