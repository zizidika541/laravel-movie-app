<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Movie App | Template by TailAdmin</title>
        <link rel="icon" href="favicon.ico" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="/style.css" rel="stylesheet" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body
        x-data="{ page: 'movie', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
        x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
    >

    <!-- ===== Preloader Start ===== -->
     @include('_partials.preloader')
    <!-- ===== Preloader End ===== -->


    <div class="flex h-screen overflow-hidden">
    <!-- ===== Sidebar Start ===== -->
    @include('_partials.sidebar') 
    <!-- ===== Sidebar End ===== -->       


            <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <!-- ===== Header Start ===== -->
            @include('_partials.navbar')
            <!-- ===== Header End ===== -->

            <!-- ===== Main Content Start ===== -->
            @yield('content')
            <!-- ===== Main Content End ===== -->
            
            </div>
        </div>

        <script defer src="/bundle.js"></script>
    </body>
</html>
