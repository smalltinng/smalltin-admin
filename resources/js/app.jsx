import './bootstrap';
import '../css/app.css';
import { createRoot } from 'react-dom/client';
import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { Toaster } from 'react-hot-toast'; // Import Toaster for global toasts

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// Debugging - log environment variables
console.log('Environment:', {
    appName,
    viteEnv: import.meta.env
});

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: async (name) => {
        try {
            const page = await resolvePageComponent(
                `./Pages/${name}.jsx`,
                import.meta.glob('./Pages/**/*.jsx')
            );
            console.log(`Resolved component for ${name}:`, page);
            return page;
        } catch (error) {
            console.error(`Failed to resolve component ${name}:`, error);
            throw error;
        }
    },
    setup({ el, App, props }) {
        console.log('Inertia app props:', props);
        const root = createRoot(el);
        root.render(
            <>
                <App {...props} />
                <Toaster position="top-right" /> {/* Add the Toaster for global toast notifications */}
            </>
        );

        // Cleanup on hot module replacement
        if (import.meta.hot) {
            import.meta.hot.on('vite:beforeFullReload', () => {
                root.unmount();
            });
        }
    },
    progress: {
        color: '#4B5563',
        showSpinner: true,
    },
}).catch((error) => {
    console.error('Inertia app initialization failed:', error);
});
