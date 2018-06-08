<div class="row">
    <div class="col-12 bg-dark text-center text-light p-3">
        <h1>Boucherie Centrale</h1>

        <a class="dropdown-item text-light" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Déconnexion') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>