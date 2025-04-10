import React, { useState } from 'react';
import {
  RiAccountCircleFill,
  RiNotification4Line,
  RiSearchLine,
  RiCloseLine
} from '@remixicon/react';
import { FaEdit, FaUserPlus } from 'react-icons/fa';
import Modal from './Modal';
import EditAdminForm from './EditAdminForm';
import AdminCreateForm from './AdminCreateForm';
import AdminProfile from './AdminProfile';
import { Toaster } from 'react-hot-toast';

function NavBar({ title, adminDetails, onSearch }) {
  const [isEditModalOpen, setIsEditModalOpen] = useState(false);
  const [isAddModalOpen, setIsAddModalOpen] = useState(false);
  const [isProfileOpen, showProfile] = useState(false);
  const [searchOpen, setSearchOpen] = useState(false);
  const [searchTerm, setSearchTerm] = useState('');

  const handleEditAdmin = () => setIsEditModalOpen(true);
  const handleAddAdmin = () => setIsAddModalOpen(true);
  const handleShowProfile = () => showProfile(!isProfileOpen);
  const toggleSearch = () => setSearchOpen(!searchOpen);

  const closeModals = () => {
    setIsEditModalOpen(false);
    setIsAddModalOpen(false);
  };

  const handleSearchChange = (e) => {
    setSearchTerm(e.target.value);
    if (onSearch) {
      onSearch(e.target.value);
    }
  };

  const clearSearch = () => {
    setSearchTerm('');
    if (onSearch) {
      onSearch('');
    }
  };

  return (
    <div className="bg-white h-16 flex items-center justify-between px-6 shadow-sm relative border-b border-gray-100">
      <Toaster position="top-right" />

      {/* Title or Search Bar */}
      <div className="flex items-center flex-1 max-w-2xl">
        {!searchOpen ? (
          <h1 className="font-bold text-xl text-gray-800 truncate">{title}</h1>
        ) : (
          <div className="relative w-full">
            <div className="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <RiSearchLine className="text-gray-400" />
            </div>
            <input
              type="text"
              className="block w-full pl-10 pr-10 py-2 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-green-500 focus:border-transparent"
              placeholder="Search..."
              value={searchTerm}
              onChange={handleSearchChange}
              autoFocus
            />
            {searchTerm && (
              <button
                onClick={clearSearch}
                className="absolute inset-y-0 right-0 pr-3 flex items-center"
              >
                <RiCloseLine className="text-gray-400 hover:text-gray-600" />
              </button>
            )}
          </div>
        )}
      </div>

      {/* Right-side icons */}
      <div className="flex items-center gap-4">
        {/* Search toggle button - visible on mobile */}
        <button
          onClick={toggleSearch}
          className="p-2 hover:bg-gray-100 rounded-full md:hidden"
        >
          {searchOpen ? (
            <RiCloseLine className="text-gray-600" />
          ) : (
            <RiSearchLine className="text-gray-600" />
          )}
        </button>

        {/* Search button - visible on desktop */}
        <button
          onClick={toggleSearch}
          className="p-2 hover:bg-gray-100 rounded-full hidden md:block"
        >
          <RiSearchLine className="text-gray-600" />
        </button>

        <div className="flex items-center gap-3">
          <span className="font-medium text-gray-700 hidden sm:block">
            {adminDetails?.fullname ?? "Welcome"}
          </span>
          <button
            onClick={handleEditAdmin}
            className="p-2 hover:bg-gray-100 rounded-full transition-colors"
            aria-label="Edit profile"
          >
            <FaEdit className="text-gray-600" />
          </button>
          <button
            onClick={handleAddAdmin}
            className="p-2 hover:bg-gray-100 rounded-full transition-colors"
            aria-label="Add admin"
          >
            <FaUserPlus className="text-gray-600" />
          </button>
        </div>

        <button
          className="p-2 hover:bg-gray-100 rounded-full transition-colors relative"
          aria-label="Notifications"
        >
          <RiNotification4Line className="text-gray-600" />
          <span className="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
        </button>

        <button
          onClick={handleShowProfile}
          className="p-2 hover:bg-gray-100 rounded-full transition-colors"
          aria-label="User profile"
        >
          <RiAccountCircleFill className="text-gray-600" />
        </button>
      </div>

      {/* Profile dropdown */}
      {isProfileOpen && (
        <div className="absolute right-4 top-16 bg-white shadow-lg rounded-md p-4 z-50 w-64 border border-gray-100">
          <AdminProfile />
        </div>
      )}

      {/* Modals */}
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