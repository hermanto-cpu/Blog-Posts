@extends('layouts.main')

@section('container') 

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h1 class="mb-5">{{ $posting->title }}</h1>
            <h6>By : <a href="/post?author={{ $posting->author->username }}">{{ $posting->author->name }}</a> | category <a href="/post?category={{ $posting->category->slug}}" class="text-decoration-none">{{ $posting->category->name}}</a></h6>
            <img src="https://source.unsplash.com/1200x400/?{{ $posting->category->name }}" class="card-img-top" alt="{{ $posting->category->name }}" class="img-fluid">
            <article class="my-3 fs-6">
                <h6>{!! $posting->body !!}</h6>
                <h6><a href="/post" class="text-decoration-none">Back to post</a></h6>
            </article>
            </div>
        </div>
    </div>

@endsection