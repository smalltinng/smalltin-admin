import React, { useState, useEffect } from 'react';
import MainLayout from '@/Layouts/MainLayout';
import ViewUserModal from '@/Components/ViewUserModal';
import axios from 'axios';
import Chat from '@/Components/Chat'; // Assuming you have a Chat component
import { ChatBubbleOvalLeftEllipsisIcon } from '@heroicons/react/24/outline'; // Correct import for Heroicons v2

const UserList = () => {
  const [users, setUsers] = useState([]);
  const [showViewModal, setShowViewModal] = useState(false);
  const [currentUser, setCurrentUser] = useState(null);
  const [currentPage, setCurrentPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);
  const [totalUsers, setTotalUsers] = useState(0);
  const [showChat, setShowChat] = useState(false);
  const [selectedUser, setSelectedUser] = useState(null);

  useEffect(() => {
    fetchUsers(currentPage);
  }, [currentPage]);

  const fetchUsers = async (page) => {
    try {
      const response = await axios.get(`users?page=${page}&limit=50`, {
        headers: {
          'Content-Type': 'application/json',
          // Add authorization token if required
        }
      });
      setUsers(response.data.users.data); // Adjust the response structure as needed
      setTotalPages(response.data.users.last_page); // Adjust according to your response structure
      setTotalUsers(response.data.users.total); // Adjust according to your response structure
    } catch (error) {
      console.error('Error fetching users:', error);
    }
  };

  const handleView = (user) => {
    setCurrentUser(user);
    setShowViewModal(true);
  };

  const handlePageChange = (page) => {
    setCurrentPage(page);
  };

  const handleShowChat = (user) => {
    setSelectedUser(user);
    setShowChat(!showChat);
  };

  return (
    <MainLayout title='User List'>
      <div className="p-4">
        <h2 className="text-2xl font-bold mb-4">User List</h2>
        <div className="flex flex-col md:flex-row justify-between mb-4">
          <span className="mb-2 md:mb-0">Total Users: {totalUsers}</span>
          <button
            className="p-2 bg-[#285B35] text-white rounded"
            onClick={() => fetchUsers(currentPage)}
          >
            Refresh
          </button>
        </div>
        <div className="bg-white rounded shadow overflow-x-auto">
          <table className="min-w-full bg-white">
            <thead>
              <tr>
                <th className="py-2">NO</th>
                <th className="py-2">Name</th>
                <th className="py-2">Email</th>
                <th className="py-2">Actions</th>
              </tr>
            </thead>
            <tbody>
              {users.length > 0 ? (
                users.map(user => (
                  <tr key={user.id}>
                    <td className="border px-4 py-2 font-bold">{user.id}</td>
                    <td className="border px-4 py-2 font-bold">{user.username.toUpperCase()}</td>
                    <td className="border px-4 py-2">{user.email}</td>
                    <td className="border px-4 py-2 flex justify-around">
                      <button className="p-1 bg-green-500 text-white rounded" onClick={() => handleView(user)}>View</button>
                      <button className="p-1 bg-green-500 text-white rounded" onClick={() => handleShowChat(user)}>
                        <ChatBubbleOvalLeftEllipsisIcon className="h-6 w-6" />
                      </button>
                    </td>
                  </tr>
                ))
              ) : (
                <tr>
                  <td colSpan="4" className="text-center py-4">No users available</td>
                </tr>
              )}
            </tbody>
          </table>
          <div className="flex flex-col md:flex-row justify-between p-4">
            <button
              onClick={() => handlePageChange(currentPage - 1)}
              disabled={currentPage === 1}
              className="p-2 bg-[#285B35] text-white rounded"
            >
              Previous
            </button>
            <span className="my-2 md:my-0">Page {currentPage} of {totalPages}</span>
            <button
              onClick={() => handlePageChange(currentPage + 1)}
              disabled={currentPage === totalPages}
              className="p-2 bg-[#285B35] text-white rounded"
            >
              Next
            </button>
          </div>
        </div>
      </div>
      {showViewModal && (
        <ViewUserModal
          user={currentUser}
          closeModal={() => setShowViewModal(false)}
        />
      )}
      {showChat && (
        <div className="fixed bottom-4 right-4 w-full max-w-md h-80 bg-white shadow-lg rounded-lg flex flex-col">
          <div className='flex-grow overflow-auto flex flex-col gap-2'>
            <Chat chatChannel='' user={selectedUser} setShowChat={setShowChat} />
          </div>
          <MessageInput setShowChat={setShowChat} />
        </div>
      )}
    </MainLayout>
  );
};

export default UserList;
