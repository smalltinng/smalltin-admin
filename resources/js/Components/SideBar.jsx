import React from 'react';
import { Link } from '@inertiajs/react';
import ApplicationLogo from './ApplicationLogo';
import SideBarLink from './SideBarLink';

export default function SideBar() {
    return (
        <div className="w-16 md:w-20 lg:w-64 flex flex-col bg-white h-full border-r border-gray-100 transition-all duration-300 ease-in-out">
            <Link className="flex items-center justify-center h-16 border-b border-gray-100" href="/">
                <ApplicationLogo className="h-8 w-auto text-gray-800" />
            </Link>
            <nav className="flex-1 flex flex-col gap-1 p-2 overflow-y-auto">
                <SideBarLink link="/admin/dashboard" title="Dashboard" />
                <SideBarLink link="/admin/ladder-board" title="Ladder Board" />
                <SideBarLink link="/admin/messages" title="Messages" />
                <SideBarLink link="/admin/question-bank" title="Question Bank" />
                <SideBarLink link="/admin/fields" title="Fields" />
                <SideBarLink link="/admin/all-user" title="Users" />
            </nav>
        </div>
    );
}