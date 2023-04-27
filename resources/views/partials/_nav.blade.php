<nav>
    <div class="nav-wrapper red">
        <a href="#"> <img src="{{asset('default/logo.png')}}" alt="" width="70px" height="60px"> projet</a>

        <ul id="nav-mobile" class="right hide-on-med-and-down">

        @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest

            <li><a class="grey-text text-lighten-3" href="{{ url('/')}}">home</a></li>

        @auth

        <li><a class="grey-text text-lighten-3" href="{{ route('gallerie')}}">Gallerie</a></li>
        <li><a class="grey-text text-lighten-3" href="{{ route('pdf')}}">Pdf</a></li>
        <li><a class="grey-text text-lighten-3" href="{{ route('word') }}">Word</a></li>
        @endauth

            <li><a class="grey-text text-lighten-3" href="{{ route('liste') }}">Liste</a></li>
        </ul>



    </div>


</nav>


