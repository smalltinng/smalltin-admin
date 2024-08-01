// resources/js/Components/Features.jsx
import React from 'react';
import { CheckCircleIcon } from '@heroicons/react/24/outline';

const features = [
    {
        name: 'Earn Points',
        description: 'Earn 50 points for each correct answer and climb up the leaderboard.',
        icon: CheckCircleIcon,
    },
    {
        name: 'Expert Questions',
        description: 'Answer questions curated by experts in various fields.',
        icon: CheckCircleIcon,
    },
    {
        name: 'Community Learning',
        description: 'Join a community of learners and share your knowledge.',
        icon: CheckCircleIcon,
    },
    {
        name: 'Personalized Dashboard',
        description: 'Track your progress and see your achievements in your personalized dashboard.',
        icon: CheckCircleIcon,
    },
];

const Features = () => {
    return (
        <div className="bg-white py-16 sm:py-24">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="lg:text-center">
                    <h2 className="text-base text-[#285B35] font-semibold tracking-wide uppercase">Features</h2>
                    <p className="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Discover what Smalltin offers
                    </p>
                    <p className="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Our app is designed to help you learn and grow in your field with these amazing features.
                    </p>
                </div>

                <div className="mt-10">
                    <dl className="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        {features.map((feature) => (
                            <div key={feature.name} className="relative">
                                <dt>
                                    <div className="absolute flex items-center justify-center h-12 w-12 rounded-md bg-[#285B35] text-white">
                                        <feature.icon className="h-6 w-6" aria-hidden="true" />
                                    </div>
                                    <p className="ml-16 text-lg leading-6 font-medium text-gray-900">{feature.name}</p>
                                </dt>
                                <dd className="mt-2 ml-16 text-base text-gray-500">{feature.description}</dd>
                            </div>
                        ))}
                    </dl>
                </div>
            </div>
        </div>
    );
}

export default Features;
