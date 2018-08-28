<nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
        <a href="/" class="navbar-brand">Boucherie Centrale</a>

        @guest

        @else

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    
                    <i class=" fa fa-power-off"></i>
                    {{ __('Déconnexion') }}
                </a>
            </li>
        </ul>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endguest
    </div>
</nav>
