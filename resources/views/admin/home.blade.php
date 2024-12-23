<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        hr {
            height: 15px;
        }
    </style>
</head>

<body>
    @include('admin.layouts.navigation')

    <div class="w-[90%] h-[20px] items-center mx-auto mt-[5%]">
        <h1 class="text-start text-2xl font-bold">Admin Dashboard</h1>
        <hr class="h-0.5 bg-gray-300">
    </div>

    <section class="flex flex-col w-full h-[600px] items-center mt-[5%]">
        <div class="flex w-full h-[30%] px-4 mx-auto">
            <div class="flex flex-col w-[25%] mx-[1%] rounded-lg border-2 border-[#001F3F] shadow-[5px_5px_15px_#B9E5E8] p-4">
                <div class="flex w-full justify-start items-center mb-4">
                    <h1 class="mr-[60%] text-lg">Revenue</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                    </svg>
                </div>
                <div class="flex w-full justify-start items-center">
                    <h1 class="mr-[50%]">Total Price</h1>
                    @if ($revenue)
                    <p>{{$revenue}}</p>
                    @endif
                </div>
            </div>
            <div class="flex flex-col w-[25%] h-full mx-[1%] rounded-lg border-2 border-[#001F3F] shadow-[5px_5px_15px_#B9E5E8] p-4">
                <div class="flex w-full h-[25px] justify-start items-center mb-4">
                    <h1 class="mr-[57%] text-lg">Customers</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                </div>
                <div class="flex w-full justify-start items-center">
                    <h1 class="mr-[50%]">Total Customers</h1>
                    @if ($customer)
                    <p>{{$customer}}</p>
                    @endif
                </div>
            </div>
            <div class="flex flex-col w-[25%] h-full mx-[1%] rounded-lg border-2 border-[#001F3F] shadow-[5px_5px_15px_#B9E5E8] p-4">
                <div class="flex w-full h-[25px] justify-start items-center mb-4">
                    <h1 class="mr-[66%]">Bookings</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                        <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2" />
                        <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0" />
                    </svg>
                </div>
                <div class="flex w-full justify-start items-center">
                    <h1 class="mr-[49%]">Finished Bookings</h1>
                    @if ($booking)
                    <p>{{$booking->where('status', 'finished')->count()}}</p>
                    @endif
                </div>
                <div class="flex w-full justify-start items-center">
                    <h1 class="mr-[44.5%]">Scheduled Bookings</h1>
                    @if ($booking)
                    <p>{{$booking->where('status', 'scheduled')->count()}}</p>
                    @endif
                </div>
                <div class="flex w-full justify-start items-center">
                    <h1 class="mr-[50%]">Pending Bookings</h1>
                    @if ($booking)
                    <p>{{$booking->where('status', 'pending')->count()}}</p>
                    @endif
                </div>
            </div>
            <div class="flex flex-col w-[25%] h-full mx-[1%] rounded-lg border-2 border-[#001F3F] shadow-[5px_5px_15px_#B9E5E8] p-4">
                <div class="flex w-full h-[25px] justify-start items-center mb-4">
                    <h1 class="mr-[51%] text-lg">Active Staffs</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                    </svg>
                </div>
                <div class="flex w-full justify-start items-center">
                    <h1 class="mr-[50%]">Total Employees</h1>
                    @if ($employee)
                    <p>{{$employee}}</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="w-full h-[65%] mx-[3%] mt-[3%] px-4">
            <div class="w-full h-full bg-slate-400 rounded-lg border-2 border-black p-4"></div>
        </div>
    </section>

    <!-- <section class="flex flex-col w-[90%] h-[400px] mx-auto my-[5%]">
        <h1 class="text-3xl font-bold text-center">Quick Actions</h1>
        <div class="flex flex-wrap w-full h-full mx-auto mt-[3%] px-[1%] justify-center">
            <div class="flex flex-col w-[30%] h-[50%] p-4 border-2 border-[#001F3F] rounded-lg mr-[2%] mb-[5%] shadow-[5px_5px_15px_#B9E5E8]">
                <h1 class="text-lg font-bold">Booking Management</h1>
            </div>

            <div class="flex w-[30%] h-[50%] p-4 border-2 border-[#001F3F] rounded-lg mr-[2%] mb-[5%] shadow-[5px_5px_15px_#B9E5E8]">

            </div>

            <div class="flex w-[30%] h-[50%] p-4 border-2 border-[#001F3F] rounded-lg mb-[5%] shadow-[5px_5px_15px_#B9E5E8]">

            </div>

            <div class="flex w-[30%] h-[50%] p-4 border-2 border-[#001F3F] rounded-lg mr-[2%] shadow-[5px_5px_15px_#B9E5E8]">
                <a href="/admin/orders" class="quick-action bg-green-100 hover:bg-green-200 p-4 rounded-lg text-center">
                    <i class="fas fa-shopping-cart text-green-500 text-3xl"></i>
                    <p class="mt-2 text-green-700">Manage Orders</p>
                </a>
            </div>

            <div class="flex w-[30%] h-[50%] p-4 border-2 border-[#001F3F] rounded-lg mr-[2%] shadow-[5px_5px_15px_#B9E5E8]">
                <a href="/admin/users" class="bg-blue-100 shadow-md hover:shadow-lg rounded-lg p-6 flex flex-col items-center transition duration-300">
                    <i class="fas fa-users text-blue-500 text-4xl mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-700">Manage Users</h3>
                </a>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script> -->
</body>

</html>