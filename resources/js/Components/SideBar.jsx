import React from 'react';
import { Link } from '@inertiajs/react';
import ApplicationLogo from './ApplicationLogo';
import SideBarLink from './SideBarLink';

export default function SideBar() {
    return (
        <div className="w-[10%] sm:w-[5%] md:w-[8%] lg:w-[10%] xl:w-[12%] flex flex-col gap-2 bg-white h-full">
            <Link className="flex content-center items-center text-center h-16 justify-center" href="/">
                <ApplicationLogo className="block border-black h-9 w-auto fill-current text-gray-800 dark:text-gray-50" />
            </Link>
            <SideBarLink link={"/admin/dashboard"} title="DashBoard" />
            <SideBarLink link={"/admin/ladder-board"} title="Ladder Board" />
            <SideBarLink link={"/admin/messages"} title="Messages" />
            <SideBarLink link={"/admin/question-bank"} title="Question Bank" />
            {/* <SideBarLink link={"/admin/transactions"} title="Transactions" /> */}
            <SideBarLink link={"/admin/fields"} title="Fields" />
            <SideBarLink link={"/admin/all-user"} title="Users" />
        </div>
    );
}
