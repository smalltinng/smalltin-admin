// resources/js/Layouts/AppLayout.jsx
import React from 'react';
import { InertiaLink } from '@inertiajs/inertia-react';
import WelcomeNavBar from '@/Components/WelcomeNavBar';
import { Head } from '@inertiajs/react';


const AppLayout = ({ children }) => {
    return (
        <div>
            <Head title='Smalltin' />
            <WelcomeNavBar />
            <main>{children}</main>
        </div>
    );
};

export default AppLayout;
