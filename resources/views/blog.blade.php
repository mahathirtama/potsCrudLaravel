@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->tittle }}</h1>
            <p>By. <a href="/post?author={{ $post->author->username }}" class="text-decoration-none">{{
                    $post->author->name
                    }}</a>
                in <a href="/post?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>


            <a class="btn btn-success mt-3" href="/post">Back To Post</a>
        </div>
    </div>
</div>
@endsection