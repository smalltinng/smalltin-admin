import React, { useState } from 'react';

const AddAdminForm = ({ onClose }) => {
  const [formData, setFormData] = useState({
    fullName: '',
    userName: '',
    email: '',
    password: '',
    confirmPassword: ''
  });

  const [error, setError] = useState(null);
  const [success, setSuccess] = useState(null); // For showing success message

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData(prevData => ({
      ...prevData,
      [name]: value
    }));
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    // Check if passwords match
    if (formData.password !== formData.confirmPassword) {
      setError('Passwords do not match.');
      return;
    }

    try {
      // Send form data to the backend
      const response = await fetch('store', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Ensure CSRF token is included
        },
        body: JSON.stringify({
          fullname: formData.fullName,
          username: formData.userName,
          email: formData.email,
          password: formData.password,
          password_confirmation: formData.confirmPassword
        })
      });

      const result = await response.json();

      if (response.ok) {
        setSuccess('Admin created successfully.');
        setError(null);
        // Optionally reset the form
        setFormData({
          fullName: '',
          userName: '',
          email: '',
          password: '',
          confirmPassword: ''
        });
        // Close the form if needed
        onClose();
      } else {
        // Handle validation or server errors
        setError(result.errors || 'An error occurred while creating the admin.');
      }
    } catch (err) {
      setError('An unexpected error occurred.');
      console.error(err);
    }
  };

  return (
    <form onSubmit={handleSubmit} className="space-y-4">
      <h2 className="text-xl font-semibold">Add New Admin</h2>
      
      {/* Full Name */}
      <div>
        <label className="block mb-1">Full Name</label>
        <input 
          type="text" 
          name="fullName" 
          value={formData.fullName} 
          onChange={handleChange}
          className="border p-2 w-full"
          required
        />
      </div>

      {/* Username */}
      <div>
        <label className="block mb-1">Username</label>
        <input 
          type="text" 
          name="userName" 
          value={formData.userName} 
          onChange={handleChange}
          className="border p-2 w-full"
          required
        />
      </div>

      {/* Email */}
      <div>
        <label className="block mb-1">Email</label>
        <input 
          type="email" 
          name="email" 
          value={formData.email} 
          onChange={handleChange}
          className="border p-2 w-full"
          required
        />
      </div>

      {/* Password */}
      <div>
        <label className="block mb-1">Password</label>
        <input 
          type="password" 
          name="password" 
          value={formData.password} 
          onChange={handleChange}
          className="border p-2 w-full"
          required
        />
      </div>

      {/* Confirm Password */}
      <div>
        <label className="block mb-1">Confirm Password</label>
        <input 
          type="password" 
          name="confirmPassword" 
          value={formData.confirmPassword} 
          onChange={handleChange}
          className="border p-2 w-full"
          required
        />
      </div>

      {/* Error Message */}
      {error && <p className="text-red-500">{error}</p>}

      {/* Success Message */}
      {success && <p className="text-green-500">{success}</p>}

      {/* Submit Button */}
      <button type="submit" className="bg-blue-500 text-white p-2 rounded">Add Admin</button>
    </form>
  );
};

export default AddAdminForm;
