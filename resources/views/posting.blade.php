@extends('layouts.main')

@section('container') 

    <h1 class="mb-5">{{ $posting->title }}</h1>
    <h6>By : Hermanto in <a href="/categories/{{ $posting->category->slug}}">{{ $posting->category->name}}</a></h6>
    <p>{!! $posting->body !!}</p>
    <a href="/blog">Back to post</a>

@endsection