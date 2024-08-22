

import React, { useState, useEffect } from 'react';

const EditQuestionModal = ({ Field, closeModal, onSave }) => {
  const [name, setName] = useState(Field ? Field.name : '');
  const [color, setColor] = useState(Field ? Field.color : '#000000');
  const [size, setSize] = useState(Field ? Field.size : 1);

  const handleSave = () => {
    const updatedField = {
      ...Field,
      name,
      color,
      size,
    };
    onSave(updatedField);
    closeModal();
  };

  return (
    <div className="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50">
      <div className="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 className="text-xl font-bold mb-4">Edit Field</h2>
        
        {/* Name Input */}
        <div className="mb-4">
          <label className="block text-sm font-medium text-gray-700 mb-2">Name</label>
          <input
            type="text"
            value={name}
            onChange={(e) => setName(e.target.value)}
            className="w-full border p-2 rounded"
          />
        </div>

        {/* Color Picker */}
        <div className="mb-4">
          <label className="block text-sm font-medium text-gray-700 mb-2">Color</label>
          <input
            type="color"
            value={color}
            onChange={(e) => setColor(e.target.value)}
            className="w-full border p-2 rounded"
          />
        </div>

        {/* Size Input */}
        <div className="mb-4">
          <label className="block text-sm font-medium text-gray-700 mb-2">Size</label>
          <input
            type="number"
            value={size}
            onChange={(e) => setSize(Number(e.target.value))}
            min="1"
            step="1"
            className="w-full border p-2 rounded"
          />
        </div>

        {/* Buttons */}
        <div className="flex justify-end space-x-2">
          <button
            onClick={closeModal}
            className="px-4 py-2 bg-gray-500 text-white rounded"
          >
            Cancel
          </button>
          <button
            onClick={handleSave}
            className="px-4 py-2 bg-blue-500 text-white rounded"
          >
            Save
          </button>
        </div>
      </div>
    </div>
  );
};

export default EditQuestionModal;
