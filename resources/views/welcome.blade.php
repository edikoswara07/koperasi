<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="antialiased font-sans bg-bluegray-100">
    <nav class="bg-bluegray-100 shadow-xl fixed z-50 top-0 w-full py-3">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <div class="flex w-3/1">
                    <span class="text-lg font-semibold text-teal-900">Koperasi Bandung Wins</span>
                </div>
                <!-- Nav Menu -->
                <div class="flex-shrink item-center justify-center text-cente">
                    <ul class="flex items-center space-x-4 font-normal text-bluegray-700 text-sm">
                        <li>Home</li>
                        <li>About</li>
                        <li>Program</li>
                        <li>Agenda</li>
                        <li>FAQs</li>
                    </ul>
                </div>
                <!-- nav right menu -->
                <div class="flex w-3/12 items-center justify-end">
                    <div>
                        <button class="text-bluegray-700 px-4 py-2 rounded-md text-sm">
                            Login
                        </button>
                        <button class="bg-teal-900 text-bluegray-100 px-4 py-2 rounded-md text-sm">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigasi -->
    <section class="container mx-auto px-4 mt-28">
        <div class="flex items-center justify-between space-x-12">
            <div class="w-4/12">
                <h1 class="text-7xl text-teal-900 font-semibold">Koperasi Bandung Wins</h1>
                <p class="text-sm text-bluegray-500 mt-4 leading-relaxed tracking-wide font-light">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim rerum explicabo nemo inventore facere earum illum. Tempore quo fugiat doloribus!
                </p>
                <div class="flex mt-6">
                    <a href="#" class="px-6 py-2 bg-teal-900 text-white font-normal text-sm rounded-md shadow-md">Bergabung bersama kami</a>
                </div>
            </div>

            <div class="w-8/12">
                <div class="flex justify-end items-center space-x-4">
                    <div class="w-[400px] h-[500px]">
                        <div class="relative">
                            <div class="bg-gradient-to-t from-bluegray-900 w-[400px] h-[500px] absolute rounded-2xl "></div>
                            <img src="https://images.unsplash.com/photo-1488459716781-31db52582fe9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="img" class="object-center object-cover inset-0 w-[400px] h-[500px] rounded-2xl">
                        </div>
                    </div>
                    <div class="flex-col space-y-4">
                        <div class="w-[200px] h-[240px]">
                            <div class="relative">
                                <div class="bg-gradient-to-t from-bluegray-900 w-[200px] h-[240px] absolute rounded-2xl "></div>
                                <img src="https://images.unsplash.com/photo-1488459716781-31db52582fe9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="img" class="object-center object-cover inset-0 w-[200px] h-[240px] rounded-2xl">
                            </div>
                        </div>
                        <div class="w-[200px] h-[240px]">
                            <div class="relative">
                                <div class="bg-gradient-to-t from-bluegray-900 w-[200px] h-[240px] absolute rounded-2xl "></div>
                                <img src="https://images.unsplash.com/photo-1488459716781-31db52582fe9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="img" class="object-center object-cover inset-0 w-[200px] h-[240px] rounded-2xl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section hero -->
</body>

</html>