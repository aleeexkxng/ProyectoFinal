@extends('layouts/basicHead')

@section('tittle')
   <title>Editar Post</title>
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
        <!-- Content-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Editando el post: <b>{{ $data->title }}!</b></h2>
                        <hr class="divider" />
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                    <form action="{{ route('Post.update', $data) }}" method="POST" id="contactForm" enctype="multipart/form-data"> @csrf
                        @method('PATCH')
                            <!-- Name input-->
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="title" name="title" type="text" value="{{ $data->title }}" placeholder="Ingresa el titulo del post"  />
                                <label for="name">Titulo del post</label>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--Decription input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="description" name="description" type="text" placeholder="Ingresa la description" style="height: 10rem">{{ $data->description }}</textarea>
                                <label for="description">Description</label>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Generos number input-->
                            <div class="form-floating mb-3">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Temas</div>
                                </div>
                                @foreach($allTemas as $tema)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id={{$tema->name}} name={{$tema->name}} {{array_search($tema->id, $data->temas->pluck('id')->toArray()) !== false ? 'checked' : '' }}>
                                        <label class="form-check-label" for={{$tema->name}}>
                                            {{$tema->name}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Re-publicar post</button></div>
                        </form>
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