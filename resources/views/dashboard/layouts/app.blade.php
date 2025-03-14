<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>@yield('title', 'Dashboard')</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

  <!-- [Favicon] icon -->
<link rel="icon" href="{{asset('dashboard/assets/images/logo.ico')}}"> <!-- [Google Font] Family -->
<link rel="stylesheet" href="{{asset('dashboard/assets/css/plugins/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="{{asset('dashboard/assets/fonts/tabler-icons.min.css')}}" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="{{asset('dashboard/assets/fonts/feather.css')}}" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="{{asset('dashboard/assets/fonts/fontawesome.css')}}" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="{{asset('dashboard/assets/fonts/material.css')}}" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{asset('dashboard/assets/css/style.css')}}" id="main-style-link" >
<link rel="stylesheet" href="{{asset('dashboard/assets/css/style-preset.css')}}" >

{{-- toastr --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


@stack('css')

@vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<!-- [Head] end -->
<body>

    @include('dashboard.layouts.sidebar')

    @include('dashboard.layouts.nav')

    @yield('content')


    @include('dashboard.layouts.footer')


 {{-- <!-- [Page Specific JS] start -->
 <script src="{{asset('dashboard/assets/js/plugins/apexcharts.min.js')}}"></script>
 <script src="{{asset('dashboard/assets/js/pages/dashboard-default.js')}}"></script>
 <!-- [Page Specific JS] end --> --}}

 
 <!-- Required Js -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="{{asset('dashboard/assets/js/plugins/popper.min.js')}}"></script>
 <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
 <script src="{{asset('dashboard/assets/js/plugins/simplebar.min.js')}}"></script>
 <script src="{{asset('dashboard/assets/js/plugins/bootstrap.min.js')}}"></script>
 <script src="{{asset('dashboard/assets/js/fonts/custom-font.js')}}"></script>
 <script src="{{asset('dashboard/assets/js/pcoded.js')}}"></script>
 <script src="{{asset('dashboard/assets/js/plugins/feather.min.js')}}"></script>
 {{-- Toastr --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 
 
  
 <script>layout_change('light');</script>
  
  
  
  
 <script>change_box_container('false');</script>
 
 
 
 <script>layout_rtl_change('false');</script>
 
 
 <script>preset_change("preset-1");</script>
 
 
 <script>font_change("Public-Sans");</script>

 @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
@endif
 
@stack('script')

</body>
<!-- [Body] end -->

</html>