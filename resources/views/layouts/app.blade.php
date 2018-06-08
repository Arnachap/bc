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
</body>
</html>
