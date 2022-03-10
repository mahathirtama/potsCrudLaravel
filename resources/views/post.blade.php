@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-center">{{ $tittle }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/post">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($post->count())

<div class="card mb-3">
    @if ($post[0]->image)
    <div style="max-height: 400px; overflow:hidden;">
        <img src="{{ asset('storage/' . $post[0]->image) }}" alt="{{ $post[0]->category->name }}" class="card-img-top">
    </div>
    @else
    <img src="https://source.unsplash.com/1200x400/?{{ $post[0]->category->name }}" class="card-img-top"
        alt="{{ $post[0]->category->name }}">
    @endif
    <div class="card-body text-center">
        <h3 class="card-title"><a href="/post/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{
                $post[0]->tittle }}</a></h3>
        <p><small class="text-muted">By. <a href="/post?author={{ $post[0]->author->username }}"
                    class="text-decoration-none">{{ $post[0]->author->name }} in <a
                        href="/post?category={{ $post[0]->category->slug }}" class="text-decoration-none">{{
                        $post[0]->category->name }}</a>
                    {{ $post[0]->created_at->diffForHumans() }}</small>
        </p>
        <p class="card-text">{{$post[0]->excerpt}}</p>
        <a href="/post/{{ $post[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($post->skip(1) as $p)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0,0.7)">
                    <a href="/post?category={{ $p->category->slug }}" class="text-white text-decoration-none">{{
                        $p->category->name }}</a>
                </div>
                @if ($p->image)
                <img src="{{ asset('storage/' . $p->image) }}" alt="{{ $p->category->name }}" class="card-img-top">
                @else
                <img src="https://source.unsplash.com/500x400/?{{ $p->category->name }}" class="card-img-top"
                    alt="{{ $p->category->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $p->tittle }}</h5>
                    <p><small class="text-muted">By. <a href="/post?author={{ $p->author->username }}"
                                class="text-decoration-none">{{ $p->author->name }}</a>
                            {{ $p->created_at->diffForHumans() }}</small>
                    </p>
                    <p class="card-text">{{ $p->excerpt }}</p>
                    <a href="/post/{{ $p->slug }}" class="btn btn-primary">Read More...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<p class="text-center fs-4">No Post Found.</p>
@endif


<div class="d-flex justify-content-center">
    {{ $post->links() }}
</div>

{{-- @foreach ($post->skip(1) as $p)
<article class="mb-5 border-bottom pb-4">
    <h2>
        <a href="/post/{{ $p->slug }}" class="text-decoration-none">{{ $p->tittle }}</a>
    </h2>
    <p>By. <a href="/authors/{{ $p->author->username }}" class="text-decoration-none">{{ $p->author->name }} in <a
                href="/categories/{{ $p->category->slug }}" class="text-decoration-none">{{ $p->category->name }}</a>
    </p>
    <p>{{ $p->excerpt }}</p>

    <a href="/post/{{ $p->slug }}" class="text-decoration-none">Read More...</a>
</article>
@endforeach --}}
@endsection