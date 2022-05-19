@extends('layouts/basicHead')

@section('tittle')
   <title>Formulario</title>
@endsection

@section('OwnCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/add-new-post.css') }}">
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
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Danos tu opinión!</h2>
                        <hr class="divider" />
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form action="{{ route('Comentario.store') }}" method="POST">
                            @csrf
                            <!-- Valoracion -->
                            <div class="form-floating mb-3">
                                <label for="calificacion">Califica este post.</label>
                                <input type="range" min="0" max="10" step="1" list="valoracion" name="valoracion" id="valoracion">
                            </div>
                            <!-- Comentario -->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="contenido" id="contenido" type="text" placeholder="Escribe tu comentario aqui->" style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="contenido">Contenido</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">El contenido comentario es necesario!</div>
                            </div>
                            @error('contenido')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl Enable" id="submitButton" type="submit">Publicar comentario</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">-EL rincon del boomer-</div></div>
        </footer>
    </body>
@endsection