  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel navbar-color p-0">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->

                <a class="navbar-brand nav-item-color" href="{{ route('welcome') }}">Blogee</a>

                @if (Auth::check())

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item ">
                        <a class="nav-link nav-item-color hoverExten" href="{{ route('inicio') }}" tabindex="-1">Inicio</a>
                    </li>
                    @if (Auth::user()->type ==="admin")
                        <li class="nav-item ">
                            <a class="nav-link nav-item-color hoverExten" href="{{ route('users.index') }}" tabindex="-1">Usuarios</a>
                        </li>
                    @endif


                    <li class="nav-item ">
                        <a class="nav-link nav-item-color hoverExten" href="{{ route('categories.index') }}" tabindex="-1" >Categorias</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-item-color hoverExten" href="{{ route('articles.index') }}" tabindex="-1" >Articulos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-item-color hoverExten" href="{{ route('images.index') }}" tabindex="-1" >Imagenes</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-item-color hoverExten" href="{{ route('tags.index') }}" tabindex="-1" >Tags</a>
                    </li>

                </ul>

                @endif

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link nav-item-color" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link nav-item-color" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="text-info font-weight-bold text-uppercase">   {{ Auth::user()->name }} </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
