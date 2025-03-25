@extends('layouts.app')
@section('title-page', $post->title)
@section('content')
    <section id="show">

        <div class="container">
            <h1 class="text-light text-center big-line my-3">{{ $post->title }}</h1>
            <div class="row">
                <div class="col-8">

                    <div class="img-container-post text-center">
                        <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                    </div>

                </div>
                <div class="col-4 h-100">
                    <div class="background">

                        <h5 class="small-line fw-semibold">AUTORE</h5>
                        <p class="text-light mb-3">{{ $post->author }}</p>
                        <h5 class="small-line fw-semibold">CATEGORIA</h5>
                        <p class="text-light mb-3">{{ $post->category->name }}</p>

                        <h5 class="small-line fw-semibold">PUBBLICATO IL</h5>
                        <p class="text-light mb-3">{{ $post->published_at }}</p>
                        <h5 class="small-line fw-semibold mb-3">GITHUB LINK</h5> <br>

                        <a class="btn btn-custom" href="{{ $post->github_link }}" target="_blank"
                            rel="noopener noreferrer">GitHub</a>

                    </div>
                    <div class="background mt-3">
                        <h5 class="small-line fw-semibold mb-3">Modifica il post</h5> <br>

                        <a class="btn btn-warning mb-4" href="{{ route('posts.edit', $post->id) }}">Modifica</a><br>


                        <h5 class="small-line fw-semibold mb-3">Elimina il post</h5> <br>

                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="background my-3">


                <h4 class="small-line fw-semibold">DESCRIZIONE</h4>
                <p class="text-light text-post">{{ $post->content }}</p>
                <div>
                    @foreach ($post->tags as $tag)
                        <span class="badge bg-primary">{{ $tag->name }}</span>
                    @endforeach
                </div>
            </div>
    </section>

@endsection
iv>
