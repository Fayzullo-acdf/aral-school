<html lang="{{ LaravelLocalization::getCurrentLocale() }}">

<head>
    @yield('head')
</head>

<body>
    <div class="grid-container">
        <span class="grid-line"></span>
        <span class="grid-line"></span>
        <span class="grid-line"></span>
    </div>
    <div class="overlay">

        <x-header :site_translations="$site_translations" :menus="$menus" />

        @yield('main')

        <x-footer :site_translations="$site_translations"></x-footer>

        <x-mobile_menu :menus="$menus"></x-mobile_menu>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>
