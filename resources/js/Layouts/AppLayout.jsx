// resources/js/Layouts/AppLayout.jsx
import React from 'react';
import { InertiaLink } from '@inertiajs/inertia-react';
import WelcomeNavBar from '@/Components/WelcomeNavBar';


const AppLayout = ({ children }) => {
    return (
        <div>
            <WelcomeNavBar />
            <main>{children}</main>
        </div>
    );
};

export default AppLayout;
