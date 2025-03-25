@extends('layouts.app')
@section('title-page', 'Progetti')
@section('content')
    {{-- <section id="project-hero">
        <div class="colored-hero d-flex justify-content-center align-items-center ">
            <div class="container text-center position-relative z-2">
                <h1 class="title text-light  ">Progetti</h1>

            </div>
        </div>
    </section> --}}
    <section id="project">
        <div class="container">


            <div class="col-12 my-3 d-flex justify-content-between align-items-center">


                <div>
                    <a class="btn btn-custom" href="{{ route('posts.create') }}">Aggiungi Progetto</a>

                </div>
            </div>

            <div class="row row-cols-4">

                @foreach ($posts as $post)
                    <div class="col text-center ">
                        <div class="card bg-transparent  text-light mx-auto" style="width: 18rem;">
                            <img src="{{ asset($post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <h5 class="author">{{ $post->author }}</h5>
                                <p class="card-text">{{ $post->content }}</p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-custom">Vedi Progetto nel
                                    dettaglio</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
