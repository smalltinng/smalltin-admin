import React from 'react';
import { Head } from '@inertiajs/react';
// import { SideBar} from "@/Layouts/SideBar";
export default function Dashboard({ status }) {
    return (

        
        <div>
            <Head title="Dashboard" tag="ade" />
            {status && <div className="status">{status}</div>}
           <div className='h-svh w-svw bg-slate-300'>
           {/* <SideBar/> */}
            
           </div>
        </div>
    );
}
