import {  RiAccountCircleFill, RiNotification4Line,   } from '@remixicon/react'
import React from 'react'

function NavBar({title}) {
  return (
    <div className=" bg-[#FFFFFF] h-12 flex items-center justify-between">
  <div className='font-bold p-3'>{title}</div>
    <div className='justify-self-end'>
        <RiNotification4Line/>
    <div className=''>  </div>
    </div>
    </div>
  )
}

export default NavBar