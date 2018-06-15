<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('inc.header')
</head>
<body>
    <div id="app">

        @include('boulish.mainNav')

        <div class="container-fluid pt-5 mt-5">
            <div class="row">
                @guest

                @else

                @include('boulish.sidebar')
                
                @endguest

                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
