@guest
    @if (Route::has('login'))
        <div class="text-decoration-none row">
            <a class="btn col-4 fst-italic" href="{{ route('login') }}">Connexion</a>
        </div>
    @endif

    @if (Route::has('register'))
        <div class="text-decoration-none row">
            <a class="btn col-12 ms-2 fst-italic" href="{{ route('register') }}">Créer un compte</a>
        </div>
    @endif
@else
    <div class="nav-item">
        <a id="navbarDropdown" class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Bonjour  {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" style="font-size: 12px" href="{{ route('home') }}">
                Mes commandes
            </a>
            <a class="dropdown-item" style="font-size: 12px" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                Déconnexion
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
@endguest
