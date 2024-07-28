import React from 'react';
import { Head } from '@inertiajs/react';
import NavLink from "@/Components/SideBarLink";
import MainLayout from '@/Layouts/MainLayout';
import DashBoardCard  from '@/Components/DashBoardCard';
export default function Dashboard({ status }) {
    return (      
        <MainLayout title='DashBoard'>
        
        <div>
            <div className='flex gap-x-10'>
           <DashBoardCard title="Users" subTitle="100"/>
           <DashBoardCard title="Winning" subTitle="10"/>
           <DashBoardCard title="Approximate Payout" subTitle="100000"/>
           <DashBoardCard title="Total PayOut" subTitle="100000000"/>
            </div>

            <div>
                <div className='h-48 w-80 bg-white m-6'></div>
            </div>


        </div>
        </MainLayout>
    );
}
