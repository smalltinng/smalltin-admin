import React, { useEffect, useState } from 'react';
import { Head } from '@inertiajs/react';
import NavLink from "@/Components/SideBarLink";
import MainLayout from '@/Layouts/MainLayout';
import DashBoardCard from '@/Components/DashBoardCard';
import axios from 'axios';

export default function Dashboard({ status }) {
    const [adminDetail, setAdminDetails] = useState(null);
    const [settings, setSettings] = useState(null);

    const saveAdminDetails = (adminDetails) => {
        localStorage.setItem('adminDetails', JSON.stringify(adminDetails));
    };

    const getAdminDetails = async () => {
        try {
            const response = await axios.get("details", {
                headers: { 'Content-Type': 'application/json' }
            });

            setAdminDetails(response.data.admin);
            setSettings(response.data.settings);

            saveAdminDetails(response.data.admin);
            console.log("this is the data", adminDetail);
            console.log(response.data.admin);
            console.log(response.data.settings);
        } catch (error) {
            console.log(error);
        }
    };

    useEffect(() => {
        getAdminDetails();
    }, []);

    return (
        <MainLayout adminDetails={adminDetail} title='Dashboard'>
            <div className='p-6'>
                {/* Card Section */}
                <div className='grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4'>
                    <DashBoardCard title="Users" subTitle={settings?.total_users ?? 0} />
                    <DashBoardCard title="Winning" subTitle={settings?.total_winners ?? 0} />
                    <DashBoardCard title="Approximate Payout" subTitle={settings?.total_amount ?? 0} />
                    <DashBoardCard title="Total Payout" subTitle={settings?.total_amount ?? 0} />
                </div>

                {/* Placeholder Section */}
                <div className='mt-6'>
                    <div className='h-48 bg-white rounded-lg shadow-md'></div>
                </div>
            </div>
        </MainLayout>
    );
}
