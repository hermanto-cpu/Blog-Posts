@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
   @if(session()->has('succees')) 
    <div class="col-lg-4">
      <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <h6>{{ session('succees') }}</h6>
      </div>
    @endif

    @if(session()->has('loginError')) 
    <div class="col-lg-4">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h6>{{ session('loginError') }}</h6>
      </div>
    @endif
        <main class="form-login">
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-ivalid @enderror" id="email" name="email" placeholder="Email adress" autofocus required value="{{ old('email') }}">
                <h6><label for="email">Email address</label></h6>
                @error ('email')
                <div class="invalid-feedback">
                  <h6>{{ $message }}</h6>
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <h6><label for="password">Password</label></h6>

              </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <h6><small class="d-block text-center mt-3">Not reegistered? <a href="/register">Register Now!</a></small></h6>
        </main>
    </div>
</div>
@endsection