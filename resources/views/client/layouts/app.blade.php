<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="eCommerce,shop,fashion">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--====== Title ======-->
        <title>@yield('title', 'Pesco - eCommerce HTML Template')</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{ asset('client/assets/images/favicon.png') }}" type="image/png">

        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Aoboshi+One&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{ asset('client/assets/fonts/flaticon/flaticon_pesco.css') }}">

        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="{{ asset('client/assets/fonts/fontawesome/css/all.min.css') }}">

        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset('client/assets/vendor/bootstrap/css/bootstrap.min.css') }}">

        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="{{ asset('client/assets/vendor/slick/slick.css') }}">

        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="{{ asset('client/assets/vendor/nice-select/css/nice-select.css') }}">

        <!--====== Magnific-popup css ======-->
        <link rel="stylesheet" href="{{ asset('client/assets/vendor/magnific-popup/dist/magnific-popup.css') }}">

        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="{{ asset('client/assets/vendor/jquery-ui/jquery-ui.min.css') }}">

        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{ asset('client/assets/vendor/aos/aos.css') }}">

        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('client/assets/css/default.css') }}">

        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset('client/assets/css/style.css') }}">

        @stack('css')
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>
        <!--====== End Preloader ======-->

        <!--====== Search From ======-->
        <div class="search-popup">
            <!-- Search form here -->
        </div>

        <!--====== Header Area ======-->
        @include('client.layouts.partials.header')

        <!--====== Main Content ======-->
        @yield('content')

        <!--====== Footer Area ======-->
        @include('client.layouts.partials.footer')

        <!--====== Core JS -->
       
        @stack('js')
    </body>
</html>
