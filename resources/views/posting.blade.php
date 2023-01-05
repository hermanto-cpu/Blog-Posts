@extends('layouts.main')

@section('container') 

    <h2>{{ $posting->title }}</h2>
    <h5>By : {{ $posting->author }}</h5>
    <p>{!! $posting->body !!}</p>
    <a href="/blog">Back to post</a>
@endsection