import React, { useEffect, useState } from 'react';

const AdminProfile = () => {
    const [admin, setAdmin] = useState(null);

    
    const getAdminDetails = () => {
        const adminDetails = localStorage.getItem('adminDetails');
        return adminDetails ? JSON.parse(adminDetails) : null;
    };
    useEffect(() => {
        const adminDetails = getAdminDetails();
        setAdmin(adminDetails);
    }, []);

    if (!admin) {
        return <div>Loading...</div>;
    }

    return (
        <div>
            <h1>Admin Profile</h1>
            <p>Full Name: {admin.full_name}</p>
            <p>Email: {admin.email}</p>
            <p>Username: {admin.user_name}</p>
        </div>
    );
};

export default AdminProfile;
