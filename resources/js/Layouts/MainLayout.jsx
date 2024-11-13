
import React from 'react'
import SideBar from '@/Components/SideBar'
import { Head } from '@inertiajs/react';
import NavBar from '@/Components/NavBar';
function MainLayout({children , title, adminDetails}) {
  return (
    <div className='flex h-screen bg-[#E7EDFF]'>
       <Head title={title} />
      <SideBar/>
     <div  className='flex-1' >
      <NavBar adminDetails={adminDetails} title={title}/>
      <div className='flex-1 p-4  bg-[#E7EDFF] '> 
        {children}</div>
     </div>
     
    </div>
  )
}

export default MainLayout
