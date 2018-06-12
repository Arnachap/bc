<nav class="navbar navbar-expand-md navbar-light fixed-top navbar-laravel">
    <div class="container">
        <h2 class="navbar-brand">Boucherie Centrale</h2>

        @guest

        @else

        <div id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Déconnexion') }}
                    </a>
                </li>
            </ul>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        @endguest
    </div>
</nav>
