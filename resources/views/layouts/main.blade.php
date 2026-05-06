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

        <x-head :menus="$menus"></x-head>

        @yield('main')

        <x-footer></x-footer>

        <x-mobile_menu></x-mobile_menu>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>
