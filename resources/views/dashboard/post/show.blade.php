@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
        <h1 class="my-3">{{ $posting->title }}</h1>
        <a href="/dashboard/post" class="btn btn-dark"><span data-feather="arrow-left"></span>Back to my posts</a>
        <a href="" class="btn btn-success"><span data-feather="edit-3"></span>Edit</a>
        <a href="" class="btn btn-danger"><span data-feather="x"></span>Delete</a>
        <img src="https://source.unsplash.com/1200x400/?{{ $posting->category->name }}" alt="{{ $posting->category->name }}" class="img-fluid mt-3">
        <article class="my-3 fs-6">
            <h6>{!! $posting->body !!}</h6>
        </article>
        </div>
    </div>
</div>

@endsection