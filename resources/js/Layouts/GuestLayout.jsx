import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/react';

export default function Guest({ children }) {
    return (
        <div className="min-h-screen flex flex-col lg:flex-row sm:flex-col md:flex-col  sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
          <div className='sm:absolute lg:relative backdrop: z-0 sm:w-[100%] sm:h-60 lg:w-[30%] h-[40%]'>
            <img src="/img/login.svg" alt="" srcset="" />
          </div>

            <div className="z-10 w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {children}
            </div>
        </div>
    );
}
