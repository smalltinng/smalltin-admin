import React, { useEffect } from 'react';
import { AiOutlineClose } from 'react-icons/ai'; // Close icon

const Modal = ({ isOpen, onClose, children }) => {
  useEffect(() => {
    // Close the modal when pressing "Escape" key
    const handleEsc = (e) => {
      if (e.key === 'Escape') {
        onClose();
      }
    };
    document.addEventListener('keydown', handleEsc);
    return () => {
      document.removeEventListener('keydown', handleEsc);
    };
  }, [onClose]);

  if (!isOpen) return null;

  const handleClickOutside = (e) => {
    if (e.target === e.currentTarget) {
      onClose();
    }
  };

  return (
    <div 
      className="fixed inset-0 flex items-center justify-center z-50 bg-gray-800 bg-opacity-50" 
      onClick={handleClickOutside}
    >
      <div className="bg-white p-6 rounded-lg shadow-lg w-96 relative">
        <button 
          onClick={onClose} 
          className="absolute top-3 right-3 text-gray-500 hover:text-gray-700"
        >
          <AiOutlineClose size={24} />
        </button>
        {children}
      </div>
    </div>
  );
};

export default Modal;
