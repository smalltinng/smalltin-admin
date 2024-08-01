import PrimaryButton from '@/Components/PrimaryButton';
import ApplicationLogo from '@/Components/ApplicationLogo';
import React from 'react';
import { Head } from '@inertiajs/react';

export default function Login({ status }) {
    return (
        <div className="min-h-screen flex flex-col lg:flex-row sm:flex-col md:flex-col  sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div className='sm:absolute lg:relative backdrop: z-0 sm:w-[100%] sm:h-60 lg:w-[30%] h-[40%]'>
          <img src="/img/login.svg" alt="" srcset="" />
        </div>

          <div className="z-10 w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-[#285B35] shadow-md overflow-hidden sm:rounded-lg">
            <Head title="Login" />
            {status && <div className="status">{status}</div>}

            <div className="flex sm:justify-center items-center pt-5 justify-center h-32 w-full">
             
                    <ApplicationLogo className="w-32 h-24" />
             
            </div>
            <h1>Please log in</h1>
        <form action="">
        <div className="flex items-center justify-end mt-4">
                    <PrimaryButton className="ms-4" >
                        Log in
                    </PrimaryButton>
                </div>
        </form>
        </div>
        </div>
        
    );
}
