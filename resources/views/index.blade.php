@extends('layouts/basicHead')

@section('tittle')
    <title>ERDB</title>
@endsection

@section('OwnCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')
    <body id="page-top">
        <!--Error or success message-->
        @if(session()->has('message'))
            <div class="alert alert-success" text-align=left>
                {{ session()->get('message') }}
            </div>
        @endif  
        <!-- Navigation-->
        @include('partials.navigation-bar')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Todo lo que a cualquier adulto independiente le hubiera gustado saber!</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        @guest
                            <a class="btn btn-primary btn-xl" href="{{ route('register') }}">¿Intrigado? Registrate aquí</a>
                        @endguest
                    </div>
                </div>
            </div>
        </header>
       <!-- Contact-->
        <section class="page-section" id="categorias">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Temas:</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row gx-4 align-items-center justify-content-center text-center">
                    @foreach ($allTemas as $tema)
                        <br>
                        <div class="col-lg-4 col-sm-6">
                            <form action="{{ route('posts', $tema) }}" method="GET">
                                <button class="portfolio-box img-button" type="submit">
                                    <div class="portfolio-box-caption">
                                        <div class="project-name"><b>{{ $tema->name }}</b></div>
                                    </div>
                                </button>
                            </form>
                        </div>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
        <br><br>
        <section class="Todos-los-temas" id="boton">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                    <br>
                        <form method="GET" action="{{ route('all-themes')}}">
                             <button class="btn btn-primary btn-xl" >Ver todos los temas</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">-El rincon del boomer-</div></div>
        </footer>
        
    </body>

@endsection