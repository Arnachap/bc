<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('inc.header')
</head>
<body>
    <div id="app">
        @include('inc.navbar')

        <main class="py-5">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"= integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
