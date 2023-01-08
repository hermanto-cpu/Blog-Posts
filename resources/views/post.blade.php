@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                        <button class="btn btn-dark" type="submit">Search</button>
                      </div>
                </form>
            </div>
        </div>
    </div>

    @if ($post->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?{{ $post[0]->category->name }}" class="card-img-top" alt="{{ $post[0]->category->name }}">
            <div class="card-body text-center">
            <h3 class="card-title"><a href="/post/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{ $post[0]->title }}</a></h3>
            <h6>By : <a href="/authors/{{ $post[0]->author->username }}">{{ $post[0]->author->name }}</a> | category <a href="/categories/{{ $post[0]->category->slug}}" class="text-decoration-none">{{ $post[0]->category->name}}</a>
            <small class="text-muted">{{ $post[0]->created_at->diffForHumans() }}</small>
            </h6>
                <p class="card-text">{{ $post[0]->excerpt }}</p>
                <a href="/post/{{ $post[0]->slug }}" class="text-decoration-none btn-dark">Read more...</a>
            </div>
        </div>    

    <div class="cointainer">
        <div class="row">
            @foreach ($post->skip(1) as $posting)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.5)"><a href="/categories/{{ $posting->category->slug }}" class="text-white">{{ $posting->category->name }}</a></div>
                    <img src="https://source.unsplash.com/800x400/?{{ $posting->category->name }}" class="card-img-top" alt="{{ $posting->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/post/{{ $posting->slug }}" class="text-decoration-none">{{ $posting->title }}</a></h5>
                      <h6>By : <a href="/authors/{{ $posting->author->username }}">{{ $posting->author->name }}</a>
                        <small class="text-muted">{{ $posting->created_at->diffForHumans() }}</small>
                        </h6>
                      <p class="card-text">{{ $posting->excerpt }}</p>
                      <a href="/post/{{ $posting->slug }}" class="btn btn-primary">Read more...</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    @else 
    <p class="text-center fs-4">No post found.</p>
    @endif
@endsection 