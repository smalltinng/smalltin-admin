import React, { useState } from 'react';
import { RiAccountCircleFill, RiNotification4Line } from '@remixicon/react';
import { FaEdit, FaUserPlus } from 'react-icons/fa';
import Modal from './Modal';
import EditAdminForm from './EditAdminForm';
import AdminCreateForm from './AdminCreateForm';
import AdminProfile from './AdminProfile';
import { Toaster } from 'react-hot-toast';

function NavBar({ title, adminDetails }) {
  const [isEditModalOpen, setIsEditModalOpen] = useState(false);
  const [isAddModalOpen, setIsAddModalOpen] = useState(false);
  const [isProfileOpen, showProfile] = useState(false);

  const handleEditAdmin = () => setIsEditModalOpen(true);
  const handleAddAdmin = () => setIsAddModalOpen(true);
  const handleShowProfile = () => showProfile(!isProfileOpen);
  const closeModals = () => {
    setIsEditModalOpen(false);
    setIsAddModalOpen(false);
  };

  return (
    <div className="bg-white h-14 flex items-center justify-between px-6 shadow-sm relative">
      <Toaster position="top-right" />
      <div className="font-bold text-xl text-gray-800 truncate">{title}</div>

      <div className="flex items-center gap-4">
        <div className="flex items-center gap-3">
          <span className="font-medium text-gray-700 hidden sm:block">
            {adminDetails?.fullname ?? "Welcome"}
          </span>
          <button onClick={handleEditAdmin} className="p-2 hover:bg-gray-200 rounded-full">
            <FaEdit className="text-gray-600" />
          </button>
          <button onClick={handleAddAdmin} className="p-2 hover:bg-gray-200 rounded-full">
            <FaUserPlus className="text-gray-600" />
          </button>
        </div>

        <button className="p-2 hover:bg-gray-200 rounded-full">
          <RiNotification4Line className="text-gray-600" />
        </button>

        <button onClick={handleShowProfile} className="p-2 hover:bg-gray-200 rounded-full">
          <RiAccountCircleFill className="text-gray-600" />
        </button>
      </div>

      {isProfileOpen && (
        <div className="absolute right-4 top-16 bg-white shadow-xl rounded-md p-4 z-50">
          <AdminProfile />
        </div>
      )}

      <Modal isOpen={isEditModalOpen} onClose={closeModals}>
        <EditAdminForm onClose={closeModals} />
      </Modal>

      <Modal isOpen={isAddModalOpen} onClose={closeModals}>
        <AdminCreateForm onClose={closeModals} />
      </Modal>
    </div>
  );
}

export default NavBar;
