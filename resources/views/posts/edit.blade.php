divdivdivdiv@extends('layouts.app')
@section('title-page', 'posts')
@section('content')
    <div class="container">
        <div class="form-line">

            <form class="row g-3 bg-transparent  text-light" action="{{ route('posts.update', $post) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label for="title" class="form-label fw-semibold"></label>
                    <input type="text" class="form-control bg-transparent text-light" id="title" name="title"
                        required value="{{ $post->title }}">
                </div>
                <div class="col-md-6">
                    <label for="author" class="form-label fw-semibold">Autore</label>
                    <input type="text" class="form-control bg-transparent text-light" id="author" name="author"
                        required value="{{ $post->author }}">
                </div>
                <div class="col-12">
                    <label for="cathegory" class="form-label fw-semibold">Categoria</label>
                    <select name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $post->category_id == $category_id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-12">
                    <label for="content" class="form-label fw-semibold">Contenuto</label>
                    <textarea class="form-control bg-transparent text-light" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
                </div>
                <div class="col-md-6">
                    <label for="github_link" class="form-label fw-semibold">GitHub Link</label>
                    <input type="url" class="form-control bg-transparent text-light" id="github_link" name="github_link"
                        value="{{ $post->github_link }}">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label fw-semibold">Immagine di copertina</label>
                    <input type="file" class="form-control bg-transparent text-light" id="image" name="image"
                        accept="image/*">
                </div>
                <div class="col-md-6">

                    @foreach ($tags as $tag)
                        <input type="checkbox" name="tag[]" value="{{ $tag - id }}" id="{{ $tag->id }}"
                            {{ $post->tags->contains($tag->id) ? 'checked' : '' }}>
                        <label for="{{ $tag->id }}">{{ $tag->name }}</label>
                    @endforeach
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Pubblica</button>
                </div>
            </form>
        </div>
    </div>
@endsection
