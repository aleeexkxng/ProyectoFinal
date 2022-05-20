@extends('layouts/basicHead')

@section('tittle')
   <title>ERDB</title>
@endsection

@section('OwnCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/posts.css') }}">
@endsection

@section('content')
    <body id="page-top">
        <!-- Navigation-->
        @include('partials.navigation-bar')
       <!-- Contact-->
        <section class="page-section" id="categorias">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Todos los temas:</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <br><br>
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
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">-El rincon del boomer-</div></div>
        </footer>
    </body>

@endsection