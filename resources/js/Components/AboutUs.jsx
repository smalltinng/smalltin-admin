// resources/js/Components/AboutUs.jsx
import React from 'react';

const AboutUs = () => {
    return (
        <div className="bg-gray-50 py-16 sm:py-24">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="lg:text-center">
                    <h2 className="text-base text-blue-600 font-semibold tracking-wide uppercase">About Us</h2>
                    <p className="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Our Mission
                    </p>
                    <p className="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        At Smalltin, we aim to create a platform where individuals can enhance their knowledge and skills by answering questions in their field. Our goal is to foster a community of learners and experts who can share their insights and grow together.
                    </p>
                </div>

                <div className="mt-10">
                    <div className="max-w-3xl mx-auto">
                        <div className="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div className="px-4 py-5 sm:px-6">
                                <h3 className="text-lg leading-6 font-medium text-gray-900">
                                    Our Story
                                </h3>
                                <p className="mt-1 max-w-2xl text-sm text-gray-500">
                                    Smalltin was founded with the vision of creating a fun and engaging way for people to learn. We believe that everyone has the potential to be an expert in their field, and we want to provide the tools and community to help them achieve that.
                                </p>
                            </div>
                            <div className="border-t border-gray-200">
                                <dl>
                                    <div className="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt className="text-sm font-medium text-gray-500">
                                            Our Values
                                        </dt>
                                        <dd className="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            We value knowledge, community, and growth. Our platform is designed to encourage learning through questions and answers, fostering a supportive environment where everyone can contribute and benefit.
                                        </dd>
                                    </div>
                                    <div className="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt className="text-sm font-medium text-gray-500">
                                            Join Us
                                        </dt>
                                        <dd className="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Become a part of Smalltin today and start your journey towards becoming an expert in your field. Sign up now and begin answering questions, earning points, and growing your knowledge.
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default AboutUs;
