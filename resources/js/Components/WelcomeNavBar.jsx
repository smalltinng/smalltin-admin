// resources/js/Components/WelcomeNavBar.jsx
import React from 'react';
import { Link } from '@inertiajs/inertia-react';
import ApplicationLogo from './ApplicationLogo';

const WelcomeNavBar = () => {
    return (
        <nav className="bg-[#abecbb]">
            <div className="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div className="relative flex items-center justify-between h-16">
                    <div className="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        {/* Mobile menu button*/}
                        <button className="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span className="sr-only">Open main menu</span>
                            {/* Icon when menu is closed. */}
                            <svg className="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                            {/* Icon when menu is open. */}
                            <svg className="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div className="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div className="flex-shrink-0">
                        <Link className="flex content-center items-center text-center h-16 justify-center" href="/">
                <ApplicationLogo className="block border-black h-9 w-auto fill-current text-gray-800 dark:text-gray-50" />
            </Link>
                        </div>
                        <div className="hidden sm:block sm:ml-6 justify-center place-content-center">
                            <div className="flex space-x-3">
                                <Link href="#about" className="text-[#285B35s] hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</Link>
                                <Link href="#features" className="text-[#285B35s] hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Features</Link>
                                <Link href="#contact" className="text-[#285B35s] hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    );
}

export default WelcomeNavBar;
