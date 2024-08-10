import React, { useState } from 'react';
import { RiAccountCircleFill, RiNotification4Line } from '@remixicon/react';
import { FaEdit, FaUserPlus } from 'react-icons/fa';
import Modal from './Modal';
import EditAdminForm from './EditAdminForm';
import AddAdminForm from './AddAdminForm';
import AdminProfile from './AdminProfile';

function NavBar({ title, adminDetails }) {
  const [isEditModalOpen, setIsEditModalOpen] = useState(false);
  const [isAddModalOpen, setIsAddModalOpen] = useState(false);
  const [isProfileOpen, showProfile] = useState(false);

  const handleEditAdmin = () => {
    setIsEditModalOpen(true);
  };

  const handleShowProfile = () => {
    showProfile(!isProfileOpen);
  };

  const handleAddAdmin = () => {
    setIsAddModalOpen(true);
  };

  const closeModals = () => {
    setIsEditModalOpen(false);
    setIsAddModalOpen(false);
  };

  return (
    <div className="bg-white h-12 flex items-center justify-between px-4 shadow-md">
      <div className="font-bold text-lg">
        {title}
      </div>
      
      <div className="flex items-center gap-4">
        <div className="flex items-center gap-2">
          <span className="font-medium text-gray-700">{adminDetails?.full_name ?? "Welcome"}</span>
          <button onClick={handleEditAdmin} aria-label="Edit Admin Details" className="p-2 hover:bg-gray-200 rounded-full">
            <FaEdit className="text-gray-600" />
          </button>
          <button onClick={handleAddAdmin} aria-label="Add New Admin" className="p-2 hover:bg-gray-200 rounded-full">
            <FaUserPlus className="text-gray-600" />
          </button>
        </div>
        
        <button aria-label="Notifications" className="p-2 hover:bg-gray-200 rounded-full">
          <RiNotification4Line className="text-gray-600" />
        </button>
        
        <button onClick={handleShowProfile} aria-label="User Profile" className="p-2 hover:bg-gray-200 rounded-full">
          <RiAccountCircleFill className="text-gray-600" />
        </button>
      </div>
      
      {isProfileOpen && (<div><AdminProfile/></div>)}

      {/* Modals */}
      <Modal isOpen={isEditModalOpen} onClose={closeModals}>
        <EditAdminForm onClose={closeModals} />
      </Modal>

      <Modal isOpen={isAddModalOpen} onClose={closeModals}>
        <AddAdminForm onClose={closeModals} />
      </Modal>
    </div>
  );
}

export default NavBar;
