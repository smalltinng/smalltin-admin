import React, { useEffect, useState } from 'react';
import { Head } from '@inertiajs/react';
import NavLink from "@/Components/SideBarLink";
import MainLayout from '@/Layouts/MainLayout';
import DashBoardCard from '@/Components/DashBoardCard';
import axios from 'axios';
import {
    RiUser3Fill,
    RiTrophyFill,
    RiMoneyDollarCircleFill,
    RiBankCardFill
} from "@remixicon/react";

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
        } catch (error) {
            console.log(error);
        }
    };

    useEffect(() => {
        getAdminDetails();
    }, []);

    // Card data configuration
    const cardData = [
        {
            title: "Users",
            value: settings?.total_users ?? 0,
            icon: <RiUser3Fill className="h-6 w-6" />,
            colorClass: "bg-blue-50 text-blue-600",
            iconBg: "bg-blue-100"
        },
        {
            title: "Winning",
            value: settings?.total_winners ?? 0,
            icon: <RiTrophyFill className="h-6 w-6" />,
            colorClass: "bg-purple-50 text-purple-600",
            iconBg: "bg-purple-100"
        },
        {
            title: "Approximate Payout",
            value: settings?.approximate_payout ?? 0,
            icon: <RiMoneyDollarCircleFill className="h-6 w-6" />,
            colorClass: "bg-green-50 text-green-600",
            iconBg: "bg-green-100"
        },
        {
            title: "Total Payout",
            value: settings?.total_amount ?? 0,
            icon: <RiBankCardFill className="h-6 w-6" />,
            colorClass: "bg-orange-50 text-orange-600",
            iconBg: "bg-orange-100"
        }
    ];

    return (
        <MainLayout adminDetails={adminDetail} title='Dashboard'>
            <div className='p-6'>
                {/* Card Section */}
                <div className='grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4'>
                    {cardData.map((card, index) => (
                        <DashBoardCard
                            key={index}
                            title={card.title}
                            subTitle={card.value}
                            icon={card.icon}
                            colorClass={card.colorClass}
                            iconBg={card.iconBg}
                        />
                    ))}
                </div>

                {/* Placeholder Section */}
                <div className='mt-6'>
                    <div className='h-48 bg-white rounded-lg shadow-md'></div>
                </div>
            </div>
        </MainLayout>
    );
}