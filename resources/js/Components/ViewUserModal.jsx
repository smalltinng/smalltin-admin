import React from 'react';

const ViewUserModal = ({ user, closeModal }) => {
  if (!user) return null;

  return (
    <div className="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50">
      <div className="bg-white p-4 rounded shadow-lg w-1/2">
        <h2 className="text-xl font-bold mb-4">User Details</h2>
        <div className="mb-2">
          <strong>Name:</strong> {user.name}
        </div>
        <div className="mb-2">
          <strong>Email:</strong> {user.email}
        </div>
        <div className="mb-2">
          <strong>Role:</strong> {user.role} {/* Add other user details as needed */}
        </div>
        <button onClick={closeModal} className="p-2 bg-blue-500 text-white rounded mt-4">Close</button>
      </div>
    </div>
  );
};

export default ViewUserModal;
