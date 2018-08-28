<nav class="navbar navbar-expand-md fixed-top mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Boucherie Centrale') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('nos-produits') ? 'current' : '' }}">
                    <a href="/nos-produits" class="nav-link nav-colored">Nos produits</a>
                </li>
                <li class="nav-item {{ Request::is('service-traiteur') ? 'current' : '' }}">
                    <a href="/service-traiteur" class="nav-link nav-colored">Service - traiteur</a>
                </li>
                <li class="nav-item {{ Request::is('a-propos') ? 'current' : '' }}">
                    <a href="/a-propos" class="nav-link nav-colored"> A propos</a>
                </li>
                <li class="nav-item {{ Request::is('nous-contacter') ? 'current' : '' }}">
                    <a href="/nous-contacter" class="nav-link nav-colored">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>