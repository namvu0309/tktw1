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
    <link
        href="https://fonts.googleapis.com/css2?family=Aoboshi+One&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">

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
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css')}}">

    <style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            position: fixed;
            top: 20px;
            right: 20px;
            min-width: 300px;
            z-index: 9999;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .alert-error {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        .alert-dismissible {
            padding-right: 35px;
        }
        .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            line-height: 1;
            color: #000;
            opacity: 0.5;
            cursor: pointer;
        }
    </style>

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
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <span class="close" onclick="this.parentElement.style.display='none'">&times;</span>
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-error alert-dismissible" role="alert">
            {{ session('error') }}
            <span class="close" onclick="this.parentElement.style.display='none'">&times;</span>
        </div>
    @endif

    @yield('content')

    <!--====== Footer Area ======-->
    @include('client.layouts.partials.footer')

    <!--====== Core JS -->

    @stack('js')

    <script>
        // Tự động ẩn thông báo sau 3 giây
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var alerts = document.getElementsByClassName('alert');
                for(var i = 0; i < alerts.length; i++) {
                    alerts[i].style.display = 'none';
                }
            }, 3000);
        });
    </script>
</body>

</html>
