<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   <!----- STYPE  FILE ----->
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <!-- Primary Meta Tags -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="title" content="Volt Premium Bootstrap Dashboard - Sign in page">
   <meta name="author" content="Themesberg">
   <meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
   <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
   <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

   <!-- Open Graph / Facebook -->
   <meta property="og:type" content="website">
   <meta property="og:url" content="https://demo.themesberg.com/volt">
   <meta property="og:title" content="Volt Premium Bootstrap Dashboard - Sign in page">
   <meta property="og:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
   <meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

   <!-- Twitter -->
   <meta property="twitter:card" content="summary_large_image">
   <meta property="twitter:url" content="https://demo.themesberg.com/volt">
   <meta property="twitter:title" content="Volt Premium Bootstrap Dashboard - Sign in page">
   <meta property="twitter:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
   <meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

   <!-- Favicon -->
   <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('backend') }}/image/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend') }}/image/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend') }}/image/favicon-16x16.png">
   <link rel="manifest" href="{{ asset('backend') }}/image/site.webmanifest">
   <link rel="mask-icon" href="{{ asset('backend') }}/image/safari-pinned-tab.svg" color="#ffffff">
   <meta name="msapplication-TileColor" content="#ffffff">
   <meta name="theme-color" content="#ffffff">

   <!-- Fontawesome -->
   <link type="text/css" href="{{ asset('backend') }}/css/all.min.css" rel="stylesheet">
   <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">


   <!-- Notyf -->
   <link type="text/css" href="{{ asset('backend') }}/css/notyf.min.css" rel="stylesheet">

   <!-- Volt CSS -->
   <link type="text/css" href="{{ asset('backend') }}/css/volt.css" rel="stylesheet">

   <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

    <!----- JAVA SCRIPT ----->
<script src="{{ asset('backend') }}/js/popper.min.js"></script>
<script src="{{ asset('backend') }}/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="{{ asset('backend') }}/js/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="{{ asset('backend') }}/js/nouislider.min.js"></script>

<!-- Jarallax -->
<script src="{{ asset('backend') }}/js/jarallax/dist/jarallax.min.js"></script>

<!-- Smooth scroll -->
<script src="{{ asset('backend') }}/js/smooth-scroll.polyfills.min.js"></script>

<!-- Count up -->
<script src="{{ asset('backend') }}/js/countUp.umd.js"></script>

<!-- Notyf -->
<script src="{{ asset('backend') }}/js/notyf.min.js"></script>

<!-- Charts -->
<script src="{{ asset('backend') }}/js/chartist/dist/chartist.min.js"></script>
<script src="{{ asset('backend') }}/js/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="{{ asset('backend') }}/js/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Simplebar -->
<script src="{{ asset('backend') }}/js/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="{{ asset('backend') }}/js/volt.js"></script>
</body>
</html>
