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

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>
