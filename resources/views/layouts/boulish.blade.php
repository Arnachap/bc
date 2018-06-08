<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('inc.header')
</head>
<body>
    <div id="app">
        <main class="container-fluid">
            @include('inc.adminNav')

            @yield('content')
        </main>
    </div>
</body>
</html>
