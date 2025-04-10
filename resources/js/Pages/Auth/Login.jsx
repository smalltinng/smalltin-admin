import { useState, useEffect } from 'react';
import Checkbox from '@/Components/Checkbox';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import ApplicationLogo from '@/Components/ApplicationLogo';
import { Head, Link, useForm } from '@inertiajs/react';

export default function Login() {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const [showPassword, setShowPassword] = useState(false);

    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();
        post(route('admin.login'), {
            onError: (errors) => {
                if (errors.email || errors.password) {
                    // These are already handled by InputError components
                }
                if (errors.message) {
                    console.error('Authentication error:', errors.message);
                }
            },
            preserveState: true,
            preserveScroll: true
        });
    };

    const togglePasswordVisibility = () => {
        setShowPassword(!showPassword);
    };

    useEffect(() => {
        console.log(errors); // Check if errors ever come through
    }, [errors]);

    return (
        <div className="min-h-screen flex flex-col lg:flex-row sm:flex-col md:flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div className='sm:absolute lg:relative z-0 sm:w-[100%] sm:h-60 lg:w-[30%] h-[40%]'>
                <img src="/img/login.svg" alt="Login illustration" />
            </div>

            <div className="z-10 w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-[#285B35] shadow-md overflow-hidden sm:rounded-lg">
                <Head title="Log in" />

                {errors.message && (
                    <div className="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        {errors.message}
                    </div>
                )}

                <div className="flex sm:justify-center items-center pt-5 justify-center h-32 w-full">
                    <Link href="/">
                        <ApplicationLogo className="w-32 h-24" />
                    </Link>
                </div>

                <form onSubmit={submit}>
                    {/* Email Field */}
                    <div>
                        <InputLabel htmlFor="email" value="Email" />
                        <TextInput
                            id="email"
                            type="email"
                            name="email"
                            value={data.email}
                            className="mt-1 block w-full"
                            autoComplete="username"
                            isFocused={true}
                            onChange={(e) => setData('email', e.target.value)}
                        />
                        {errors.email && typeof errors.email === 'string' && (
                            <div className="mb-4 z-10 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                                {errors.email}
                            </div>
                        )}
                    </div>

                    {/* Password Field with Visibility Toggle */}
                    <div className="mt-4 relative">
                        <InputLabel htmlFor="password" value="Password" />
                        <div className="relative">
                            <TextInput
                                id="password"
                                type={showPassword ? 'text' : 'password'}
                                name="password"
                                value={data.password}
                                className="mt-1 block w-full pr-10"
                                autoComplete="current-password"
                                onChange={(e) => setData('password', e.target.value)}
                            />
                            <button
                                type="button"
                                className="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"
                                onClick={togglePasswordVisibility}
                                aria-label={showPassword ? 'Hide password' : 'Show password'}
                            >
                                {showPassword ? (
                                    <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                    </svg>
                                ) : (
                                    <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                )}
                            </button>
                        </div>
                        <InputError
                            message={
                                errors.password === 'The password field is required.'
                                    ? 'Password is required'
                                    : errors.password === 'The password must be at least 8 characters.'
                                        ? 'Password must be at least 8 characters'
                                        : errors.password === 'These credentials do not match our records.'
                                            ? 'Invalid email or password'
                                            : errors.password
                            }
                            className="mt-2"
                        />
                    </div>

                    {/* Remember Me Checkbox */}
                    <div className="block mt-4">
                        <label className="flex items-center">
                            <Checkbox
                                name="remember"
                                checked={data.remember}
                                onChange={(e) => setData('remember', e.target.checked)}
                            />
                            <span className="ms-2 text-sm text-gray-600 dark:text-gray-400">
                                Remember me
                            </span>
                        </label>
                    </div>

                    {/* Submit Button */}
                    <div className="flex items-center justify-end mt-4">
                        <PrimaryButton className="ms-4" disabled={processing}>
                            {processing ? (
                                <>
                                    <svg className="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle className="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" strokeWidth="4"></circle>
                                        <path className="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    Logging in...
                                </>
                            ) : 'Log in'}
                        </PrimaryButton>
                    </div>

                    {errors.throttle && (
                        <div className="mt-4 text-sm text-red-600">
                            Too many login attempts. Please try again later.
                        </div>
                    )}
                </form>
            </div>
        </div>
    );
}