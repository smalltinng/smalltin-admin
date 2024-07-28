// resources/js/Pages/Welcome.jsx
import React from 'react';
import AppLayout from '@/Layouts/AppLayout';
import Hero from '@/Components/Hero';
import Features from '@/Components/Features';
import AboutUs from '@/Components/AboutUs';
import ContactUs from '@/Components/ContactUs';
import Footer from '@/Components/Footer';
const Welcome = () => {
    return (
        <AppLayout>
            <Hero />
            <Features />
            <AboutUs />
            <ContactUs />
            <Footer />
        </AppLayout>
    );
};

export default Welcome;
