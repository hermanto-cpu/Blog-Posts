@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

@if ($post->count())
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <h3 class="card-title">{{ $post[0]->title }}</h3>
        <p class="card-text">{{ $post[0]->excerpt }}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>    
@else 
<p class="text-center fs-4">No post found.</p>
@endif

    @foreach ($post as $posting)
       <article class="mb-5 border-bottom pb-3">
        <h2><a href="/post/{{ $posting->slug }}" class="text-decoration-none">{{ $posting->title }}</a></h2>
            <h5>By : <a href="/authors/{{ $posting->author->username }}">{{ $posting->author->name }}</a> | category <a href="/categories/{{ $posting->category->slug}}" class="text-decoration-none">{{ $posting->category->name}}</a></h6>
              <h6>  <p>{{ $posting->excerpt }}</p>
                <a href="/post/{{ $posting->slug }}" class="text-decoration-none">Read more...</a>
              </h6>
        </article>
    @endforeach
@endsection 