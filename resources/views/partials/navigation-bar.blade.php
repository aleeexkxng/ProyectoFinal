<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ url('/') }}">El Rincón del Boomer</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Temas</a></li>
                @if (Route::has('login'))   
                    @auth
                        <li class="nav-item"><a class="nav-link" href="http://proyectofinal.test/user/profile">Ver Perfil</a></li> 
                        <li class="nav-item">
                            <form method="POST" name="logout" action="{{ route('logout') }}">
                                @csrf
                                <a class="nav-link" href="javascript:document.logout.submit()">Cerrar sesión</a></li>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a></li>
                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>