// resources/js/Components/Hero.jsx
import React from 'react';
import { Link } from '@inertiajs/inertia-react';

const Hero = () => {
    return (
        <div className="bg-gray-100">
            <div className="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
                <div className="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div>
                        <h1 className="text-4xl font-bold text-gray-900 sm:text-5xl">
                            Welcome to Smalltin
                        </h1>
                        <p className="mt-4 text-xl text-gray-600">
                            Answer questions based on your field and earn points for each correct answer. Join our community of learners and experts!
                        </p>
                        <div className="mt-8 flex">
                            <Link href="/signup" className="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-[#285B35] hover:bg-[#32944b]">
                                Get Started
                            </Link>
                        </div>
                    </div>
                    <div className="mt-10 lg:mt-0">
                        <img className="mx-auto" src="/img/phone.png" alt="Hero Image" />
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Hero;
