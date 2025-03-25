<header>
    <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
        <div class="container">
            <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon text-light"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex justify-content-center w-100 ms-2"> <!-- Centro i link -->
                    <ul class="navbar-nav">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light fs-5" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light fs-5"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-light fs-5" href="{{ url('dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light fs-5" href="{{ route('posts.index') }}">Progetti</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light fs-5" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light fs-5" href="#">{{ __('Curriculum') }}</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav-item me-3">
            <a class="nav-link text-light fs-5 text-end" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>
</header>
