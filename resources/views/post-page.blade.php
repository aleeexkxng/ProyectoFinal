@extends('layouts/basicHead')

@section('tittle')
   <title>ERDB</title>
@endsection

@section('OwnCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/post-page.css') }}">
@endsection

@section('content')
    @if(session()->has('message'))
            <div class="alert alert-success" text-align=left>
                {{ session()->get('message') }}
            </div>
    @endif  
    <body id="page-top">
        @include('partials.navigation-bar')
        <!-- Masthead-->
        <header class="masthead"style="position: relative;display:;overflow: hidden;">
                <div >
                    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="text-white font-weight-bold">{{$post->title}}</h1>
                            <h5 class="text-white font-weight-bold">Autor: {{$username}}</h5>
                            <hr class="divider" />
                        </div>
                        <div>
                            <p class="text-white-75 mb-5">Temas:<br>
                            <!--    @foreach($post->temas as $tema)
                                    {{ $tema->name }} 
                                @endforeach
                            </p>-->
                            <p class="text-white-75 mb-5">Promedio:<br>{{$post->comentarios->avg('valoracion')}}/10</p>
                            <p class="text-white-75 mb-5">Descripción:<br>{{$post->description}}</p>
                            @auth
                                <form method="GET" action="{{ route('Post.edit', $post) }}"> @csrf
                                    <input type="hidden" name="id" value="{{ $post->id }}">
                                    <button class="btn btn-secondary float" href="{{ route('Post.edit', $post) }}">Editar</button>
                                </form><br><br>
                                <form method="POST" action="{{ route('Post.delete', $post) }}"> @csrf
                                    <input type="hidden" name="id" value="{{ $post->id }}">    
                                    <button class="btn btn-secondary float">Eliminar</button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
        </header>
        <!--Comentarios-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Comentarios:</h2>
                        <hr class="divider" />
                        <hr>
                        <!-- Aqui iria el loop ------------------------------------------------------------------------------------ -->
                        @foreach($post->comentarios as $comentario)

                            @if ($comentario->isDeleted === 0)
                                @auth
                                    @if (Auth::user()->isAdmin) 
                                        <form method="POST" action="{{ route('Comentario.delete') }}"> @csrf
                                            <input type="hidden" name="id" value="{{ $comentario->id }}">
                                            <button class="btn btn-secondary float-start">Eliminar</button>
                                        </form>
                                    @endif
                                @endauth
                                <br><br>
                                <p class="text-muted mb-5">{{$comentario->user->name}}</p>
                                <p class="text-muted mb-5">{{$comentario->valoracion}}/10</p>
                                <p class="text-muted mb-5">{{$comentario->contenido}}</p>
                                <hr>
                            @endif

                        @endforeach
                        <!-- Aqui terminaria el loop ------------------------------------------------------------------------------ -->
                        @auth
                        <form action="{{ route('formulario-comentario', $post) }}" method="GET">
                            <button type="submit">Añade un comentario</button>
                        </form>
                        @endauth
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