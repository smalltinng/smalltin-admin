// resources/js/Components/Footer.jsx
import React from 'react';
import { FaFacebook, FaTwitter, FaInstagram, FaLinkedin } from 'react-icons/fa';

const Footer = () => {
    return (
        <footer className="bg-[#285B35] py-8">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="flex flex-col md:flex-row justify-between items-center">
                    <div className="text-white text-center md:text-left">
                        <h2 className="text-lg font-bold">Smalltin</h2>
                        <p className="mt-2 text-sm">© 2024 Smalltin. All rights reserved.</p>
                    </div>
                    <div className="mt-4 md:mt-0">
                        <ul className="flex space-x-6">
                            <li>
                                <a href="#" className="text-gray-400 hover:text-white">
                                    <FaFacebook className="h-6 w-6" />
                                </a>
                            </li>
                            <li>
                                <a href="#" className="text-gray-400 hover:text-white">
                                    <FaTwitter className="h-6 w-6" />
                                </a>
                            </li>
                            <li>
                                <a href="#" className="text-gray-400 hover:text-white">
                                    <FaInstagram className="h-6 w-6" />
                                </a>
                            </li>
                            <li>
                                <a href="#" className="text-gray-400 hover:text-white">
                                    <FaLinkedin className="h-6 w-6" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div className="mt-4">
                    <ul className="flex flex-col md:flex-row justify-center md:justify-start space-y-2 md:space-y-0 md:space-x-6 text-sm text-gray-400">
                        <li>
                            <a href="#" className="hover:text-white">About Us</a>
                        </li>
                        <li>
                            <a href="#" className="hover:text-white">Contact</a>
                        </li>
                        <li>
                            <a href="#" className="hover:text-white">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" className="hover:text-white">Terms of Service</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    );
}

export default Footer;
