// src/hooks/useAuth.js
import { useEffect, useState } from '@inertiajs/react';
import { useHistory } from 'react-router-dom';

const useAuth = () => {
    const [isAuthenticated, setIsAuthenticated] = useState(false);
    const history = useHistory();

    useEffect(() => {
        // Replace with your actual authentication logic
        const checkAuth = async () => {
            const response = await fetch('/api/check-auth'); // Replace with your actual API endpoint
            if (response.ok) {
                setIsAuthenticated(true);
            } else {
                history.push('/login');
            }
        };

        checkAuth();
    }, [history]);

    return isAuthenticated;
};

export default useAuth;
