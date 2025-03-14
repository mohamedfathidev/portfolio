<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> @yield('title', 'My Portfolio') </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('website/assets/favicon.ico')}}" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('website/css/styles.css')}}" rel="stylesheet" />

        {{-- Vite Files --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Additional CSS files --}}
        @stack('css')
    </head>
    <body class="d-flex flex-column h-100">
        
        @include('website.layouts.nav') 

        @yield('content')

        @include('website.layouts.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('website/js/scripts.js')}}"></script>

        {{-- Additional JS Files --}}
        @stack('javascript')
    </body>
</html>
