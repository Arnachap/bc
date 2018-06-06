<nav class="navbar navbar-expand-md navbar-light fixed-top navbar-laravel">
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
                <li class="nav-item">
                    <a href="/nos-produits" class="nav-link">Nos produits</a>
                </li>
                <li class="nav-item">
                    <a href="/service-traiteur" class="nav-link">Service - traiteur</a>
                </li>
                <li class="nav-item">
                    <a href="/a-propos" class="nav-link"> A propos</a>
                </li>
                <li class="nav-item">
                    <a href="/nous-contacter" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>