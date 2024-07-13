<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SmallTin - Admin Login</title>
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>

<body>
    <div class="h-svh w-svw flex flex-col  lg:flex-row">
        <div class="flex justify-items-center justify-center items-center h-56  lg:h-screen w-[100%] lg:w-[50%] bg-white ">
            <div class="items-center flex justify-center  justify-items-center w-[40%] lg:w-[60%]">
                <img src="/img/login.svg" alt="smallTinLogin">
            </div>
        </div>
        <div class="lg:w-[50%] w-[100%] flex justify-center items-center  ">
            <div class=" px-2">
                <div class="text-xl py-3">Admin Login</div>
                <div class=" flex px-5 items-center  h-72 bg-slate-300 rounded-xl">

                    <form class="w-full " action="{{ route('admin.login') }}" method="post">
                        @csrf <!-- Include CSRF token -->
                        @if ($errors->any())
                        <div class="bg-red-500 text-white text-sm p-4 rounded-lg mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="py-3">
                            <label for="email">Email</label>
                            <input class="py-5 outline-primary px-3 w-full h-10 rounded-lg" type="email" name="email" placeholder="Enter Your Email Here">
                        </div>
                        <div class="py-3">
                            <label for="password">Password</label>
                            <input class="outline-primary px-3 w-full h-10 rounded-lg" type="password" name="password" placeholder="Enter Your Password Here">
                        </div>

                        <div class="py-5">
                            <input class="w-full h-10 bg-primary rounded-lg" type="submit" value="Login">
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>