<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('inc.header')
</head>
<body id="backend">
    <div id="app">

        @include('boulish.inc.mainNav')

        <div class="container-fluid">
            <div class="row">
                @guest

                    @yield('content')

                @else

                    <div id="menu" class="col-md-2">
                        @include('boulish.inc.sidebar')
                    </div>

                    <main role="main" class="col-md-9 ml-sm-auto col-lg-10">

                        @include('boulish.inc.messages')

                        @yield('content')
                        
                    </main>
                    
                @endguest

            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"= integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
