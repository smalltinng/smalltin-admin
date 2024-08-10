import React, { useEffect, useState } from 'react';
import { Head } from '@inertiajs/react';
import NavLink from "@/Components/SideBarLink";
import MainLayout from '@/Layouts/MainLayout';
import DashBoardCard  from '@/Components/DashBoardCard';
import axios from 'axios';

export default function Dashboard({ status }) {
    const [adminDetail, setAdminDetails] = useState(null)
    const [settings, setSettings] = useState(null)

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
         
           saveAdminDetails(response.data.admin)
           console.log("this the data "+ adminDetail);
           console.log(response.data.admin);
           console.log(response.data.settings);
        } catch (error) {
            console.log(error);
        }
    };


    useEffect(()=>{
        getAdminDetails()
    }, [])
    return (      
        <MainLayout adminDetails={adminDetail} title='DashBoard'>
        
        <div>
            <div className='flex gap-x-10'>
           <DashBoardCard title="Users" subTitle={settings?.total_users ?? 0}/>
           <DashBoardCard title="Winning" subTitle={settings?.total_winners ?? 0}/>
           <DashBoardCard title="Approximate Payout" subTitle={settings?.total_amount ?? 0}/>
           <DashBoardCard title="Total PayOut" subTitle={settings?.total_amount ?? 0}/>
            </div>

            <div>
                <div className='h-48 w-80 bg-white m-6'></div>
            </div>


        </div>
        </MainLayout>
    );
}
