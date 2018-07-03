<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('inc.header')
</head>
<body>
    <div id="app">

        @include('boulish.inc.mainNav')

        <div class="container-fluid pt-5 mt-5">
            <div class="row">
                @guest

                    @yield('content')

                @else

                    <div class="col-md-2">
                        @include('boulish.inc.sidebar')
                    </div>

                    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                        @include('boulish.inc.messages')

                        @yield('content')
                        
                    </main>
                    
                @endguest

            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"= integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
