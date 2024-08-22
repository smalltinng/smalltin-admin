import React from 'react';
import { Link, usePage } from '@inertiajs/react';
import { RiHome4Fill, RiBarChartFill, RiMessage2Fill, RiBankFill, RiUserFill, RiExchangeDollarFill, RiListUnordered } from "@remixicon/react";

export default function SideBarLink({ link, title }) {
    const linkStyles = 'flex justify-left items-center pl-2 md:pl-4 py-2 gap-3 rounded text-[#285B35]';
    const inActivelinkStyles = 'flex justify-left border-black items-center pl-2 md:pl-4 py-2 gap-3 text-[#B1B1B1]';
    const { url } = usePage();
    const isActive = url === link;

    return (
        <Link href={link} className={isActive ? linkStyles : inActivelinkStyles}>
            {isActive && <div className='h-full w-1 rounded-r-sm bg-[#285B35]'></div>}
            {link === "/admin/dashboard" && <RiHome4Fill className='h-6 w-6' />}
            {link === "/admin/ladder-board" && <RiBarChartFill className='h-6 w-6' />}
            {link === "/admin/transactions" && <RiExchangeDollarFill className='h-6 w-6' />}
            {link === "/admin/messages" && <RiMessage2Fill className='h-6 w-6' />}
            {link === "/admin/question-bank" && <RiBankFill className='h-6 w-6' />}
            {link === "/admin/fields" && <RiListUnordered className='h-6 w-6' />}
            {link === "/admin/all-user" && <RiUserFill className='h-6 w-6' />}
            <span className="hidden lg:block">{title}</span> {/* Hide title on smaller screens */}
        </Link>
    );
}
