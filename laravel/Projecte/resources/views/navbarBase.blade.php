<nav class="navbar navbar-dark bg-dark navbar-default navbar-static-top navbar-expand-md mb-3 ">
    <div class="container-fluid ">
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbartop" aria-controls="navbartop" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse " id="navbartop">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="showimg.php">Categories </a></li>
                @php //$ut = Session::get('usertype')
                @endphp
            @if (isset(Auth::user()->usertype))
                @if(Auth::user()->usertype == "A" or Auth::user()->usertype == "M")
                    <li class="nav-item"><a class="nav-link" href="showimg.php">Administrar Posts </a></li>
                @endif
                @if(Auth::user()->usertype == "A")
                    <li class="nav-item"><a class="nav-link" href="showimg.php">Administrar Usuaris </a></li>
                @endif
            </ul>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
            @else
            </ul>
                <a class="nav-link link-light" href="/login">Login</a>
            @endif
        </div>
    </div>
</nav>
