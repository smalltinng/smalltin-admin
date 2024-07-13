<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
      <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <title>DashBoard</title>

</head>

<body class="bg-[#E5E5E5]">
<!-- <nav class="h-14  bg-white  w-svw"> -->
</nav>

<div class="h-svh w-[100%] flex  ">
    <div class="w-[15%] bg-white h-svh flex flex-col">
        <div class="h-18 items-center flex w-full place-content-center p-4">
         <img  src="{{ asset('img/logo.png')}}" alt="Smalltin" >
        </div>

        <div>
            <ul>
                <li> <i class="text-primary text-xl ri-home-4-fill"></i> Dashboard </li>
                <li>Transactions </li>
                <li>Accounts </li>
                <li>Users </li>
            </ul>
        </div>

    </div>

</div>
</body>

</html>