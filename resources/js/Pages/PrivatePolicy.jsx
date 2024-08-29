// resources/js/Pages/Welcome.jsx
import React from 'react';
import AppLayout from '@/Layouts/AppLayout';
import PrivateCom from '@/Components/PrivateCom';

import Footer from '@/Components/Footer';
const Welcome = () => {
    return (
        <AppLayout>
            <PrivateCom />
            <Footer />
        </AppLayout>
    );
};

export default Welcome;
