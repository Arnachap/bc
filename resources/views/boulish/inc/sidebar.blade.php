<nav class="d-none d-md-block bg-light sidebar">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('boulish') ? 'active' : '' }}" href="/boulish">Accueil <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('boulish/meals') ? 'active' : '' }}" href="/boulish/meals">Plats du jour</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('boulish/promotions') ? 'active' : '' }}" href="/boulish/promotions">Promotions</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link {{ Request::is('boulish/products') ? 'active' : '' }}" href="/boulish/products">Produits</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('boulish/services') ? 'active' : '' }}" href="/boulish/services">Service-Traiteur</a>
        </li>
    </ul>
</nav>