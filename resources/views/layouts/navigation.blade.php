<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-body shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bolder" href="/">
            <img src="/logo.svg" alt="" width="40" height="40" class="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a>
                    @endauth
                </li>
            </ul>
            <ul class="navbar-nav">
                @if (Route::has('login'))
                @auth
                <li class="nav-item dropdown p-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Tetapan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="dropdown-item">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}"
                        class="nav-link {{ request()->is('login') ? 'active' : '' }}">{{ __('Log in') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}"
                        class="nav-link {{ request()->is('register') ? 'active' : '' }}">{{ __('Register') }}</a>
                </li>
                @endif
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
