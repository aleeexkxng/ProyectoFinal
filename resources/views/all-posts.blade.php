@extends('layouts/basicHead')

@section('tittle')
   <title>ERDB</title>
@endsection

@section('OwnCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/posts.css') }}">
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
       <!-- Contact-->
        <section class="page-section" id="categorias">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Todos los posts:</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    @foreach ($posts as $post)
                        @if ($post->isDeleted === 0)
                            <div class="col-lg-4 col-sm-6">
                                <form action="{{ route('post-page', $post) }}" method="GET">
                                    <button class="portfolio-box img-button img-size" type="submit">
                                        <div class="portfolio-box-caption">
                                            <div class="project-name">{{ $post->title }}</div>
                                        </div>
                                    </button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        @auth
            <section class="Todos-los-posts" id="boton">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6 text-center">
                            <br>
                            <a class="btn btn-primary btn-xl" href="{{ route('add-new-post')}}" >Crear post</a>
                        </div>
                    </div>
                </div>
            </section>
        @endauth
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">-El rincon del boomer-</div></div>
        </footer>
    </body>

@endsection