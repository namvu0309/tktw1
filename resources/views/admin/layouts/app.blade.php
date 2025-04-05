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
    <script>
        // Helpers (Select2 + Bootstrap Maxlength plugins)
        Codebase.helpersOnLoad(['jq-select2', 'jq-maxlength']);

        // Initialize CKEditor 5
        ClassicEditor
            .create(document.querySelector('#js-ckeditor5-classic'), {
                licenseKey: 'GPL',
                initialData: "<p>Dark Souls III is an action role-playing game played in a third-person perspective, similar to previous games in the series. According to lead director and series creator Hidetaka Miyazaki, the game's gameplay design followed 'closely from Dark Souls II'. Players are equipped with a variety of weapons to fight against enemies, such as bows, throwable projectiles, and swords. Shields can act as secondary weapons but they are mainly used to deflect enemies' attacks and protect the player from suffering damage. Each weapon has two basic types of attacks, one being a standard attack, and the other being slightly more powerful that can be charged up, similar to FromSoftware's previous game, Bloodborne. In addition, attacks can be evaded through dodge-rolling. Bonfires, which serve as checkpoints, return from previous installments. Ashes, according to Miyazaki, play an important role in the game. Magic is featured in the game, with a returning magic system from Demon's Souls, now known as 'focus points' (FP). When performing spells, the players' focus points are consumed. There are two separate types of Estus Flasks in the game, which can be allotted to fit a players' particular play style. One of them refills hit points like previous games in the series, while another, newly introduced in Dark Souls III, refills focus points. Combat and movements were made faster and more fluid in Dark Souls III, with several players' movements, such as backstepping and swinging heavy weapons, able to be performed more rapidly, allowing players to deal more damage in a short period of time.</p>",
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('There was a problem initializing the classic editor.', error);
            });
    </script>
    @stack('js')
</body>

</html>
