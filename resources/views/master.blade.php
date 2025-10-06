<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('head')
</head>

<body>
    <div>
        @include('header')
        @include('navbar')
    </div>

    <div>
        @yield('body')
    </div>

    @yield('js')
    <div class="footer_part w-full">
        @include('footer')
    </div>
</body>

</html>
