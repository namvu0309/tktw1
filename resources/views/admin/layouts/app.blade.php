<!doctype html>
<html lang="en" class="remember-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>@yield('title', 'Admin Dashboard')</title>

    <meta name="description" content="Admin Dashboard">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('admin/assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('admin/assets/media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" id="css-main" href="{{ asset('admin/assets/css/codebase.min.css') }}">

    @stack('css')
</head>

<body>
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
        <!-- Side Overlay-->
        @include('admin.layouts.partials.side-overlay')

        <!-- Sidebar -->
        @include('admin.layouts.partials.sidebar')

        <!-- Header -->
        @include('admin.layouts.partials.header')

        <!-- Main Container -->
        <main id="main-container">
            @yield('content')
        </main>
       
        <!-- Footer -->
        @include('admin.layouts.partials.footer')
    </div>

    <!-- Core JS -->
    <script src="{{ asset('admin/assets/js/codebase.app.min.js') }}"></script>

    @stack('js')
</body>

</html>
