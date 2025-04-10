import React from 'react';
import { Link, usePage } from '@inertiajs/react';
import {
    RiDashboardFill,
    RiBarChartFill,
    RiMessage2Fill,
    RiQuestionnaireFill,
    RiListSettingsFill,
    RiUserSettingsFill,
    RiFlashlightFill,
    RiTeamFill
} from "@remixicon/react";

export default function SideBarLink({ link, title }) {
    const { url } = usePage();
    const isActive = url.startsWith(link); // Changed to startsWith for nested routes

    // Icon mapping for cleaner code
    const iconMap = {
        "/admin/dashboard": <RiDashboardFill className="h-5 w-5" />,
        "/admin/ladder-board": <RiBarChartFill className="h-5 w-5" />,
        "/admin/messages": <RiMessage2Fill className="h-5 w-5" />,
        "/admin/question-bank": <RiQuestionnaireFill className="h-5 w-5" />,
        "/admin/fields": <RiListSettingsFill className="h-5 w-5" />,
        "/admin/all-user": <RiTeamFill className="h-5 w-5" />,
    };

    return (
        <Link
            href={link}
            className={`flex items-center p-3 gap-3 rounded-lg transition-colors duration-200 
                ${isActive
                    ? 'bg-green-50 text-green-600 font-medium'
                    : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700'
                }`}
        >
            <div className={`flex items-center justify-center w-8 h-8 rounded-lg 
                ${isActive ? 'bg-green-100 text-green-600' : 'bg-gray-100 text-gray-500'}`}>
                {iconMap[link]}
            </div>
            <span className="hidden lg:inline text-sm">{title}</span>
        </Link>
    );
}