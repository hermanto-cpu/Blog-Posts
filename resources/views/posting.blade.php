@extends('layouts.main')

@section('container') 

    <h1 class="mb-5">{{ $posting->title }}</h1>
    <h6>By : <a href="/authors/{{ $posting->author->username }}">{{ $posting->author->name }}</a> | category <a href="/categories/{{ $posting->category->slug}}" class="text-decoration-none">{{ $posting->category->name}}</a></h6>
    <p>{!! $posting->body !!}</p>
    <a href="/blog" class="text-decoration-none">Back to post</a>

@endsection