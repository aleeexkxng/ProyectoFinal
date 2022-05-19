@extends('layouts/basicHead')

@section('tittle')
   <title>Agregar nuevo post</title>
@endsection

@section('OwnCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/add-new-post.css') }}">
@endsection

@section('content')
    <body>
        <!--Error or success message-->
        @if(session()->has('message'))
            <div class="alert alert-success" text-align=left>
                {{ session()->get('message') }}
            </div>
        @endif  
        <!-- Navigation-->
        @include('partials.navigation-bar')
        <!--Content-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Estas mas cerca ayudar a miles de personas!!</h2>
                        <hr class="divider" />
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- <form method="GET" action="{{ url('/formulario') }}"> -->
                        <form method="POST" action="{{ route('Post.store') }}" id="contactForm" enctype="multipart/form-data"> @csrf
                            <!-- Title input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="title" name="title" type="text" placeholder="Ingresa el titulo del post" />
                                <label for="name">Titulo del post</label>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <!-- Description input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="description" name="description" type="text" placeholder="Escribe tu post" style="height: 10rem" ></textarea>
                                <label for="sinopsis">Description</label>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                           
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Publicar post</button></div>
                        </form>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
            
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">-El rincon de boomer-</div></div>
        </footer>

    </body>
@endsection