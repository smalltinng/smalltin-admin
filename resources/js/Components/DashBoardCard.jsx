import React from 'react';

function DashBoardCard ({title, subTitle, }) {
  return (
    <div className='h-24 w-56 flex items-center  rounded-lg bg-white p-4' >
    <div className=' bg-[#FFF5D9] rounded-full h-10 w-10 '></div>
        <div className='flex flex-col text-center mx-3 '>
        <div className='text-[18px] font-bold'>{title}</div>
        <div className=' text-xs text-center font-medium'>{subTitle}</div>
    </div>
    </div>
  )
}

export default DashBoardCard
