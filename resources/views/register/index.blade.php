@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
          
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
            @csrf
            <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama">
                <h6><label for="name">Nama lengkap</label></h6>
                @error ('name')
                <div class="invalid-feedback">
                  <h6>{{ $message }}</h6>
                </div>
                @enderror
                </div>  
            <div class="form-floating">
                <input type="text" name="username" class="form-control @error('name') is-invalid @enderror" id="username" placeholder="Username">
                <h6><label for="name">Username</label></h6>
                </div>  
              <div class="form-floating">
                <input type="email" class="form-control @error('name') is-invalid @enderror" name="email" id="email" placeholder="Email adress">
                <h6><label for="email">Email address</label></h6>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error('name') is-invalid @enderror" id="password" placeholder="Password">
                <h6><label for="password">Password</label></h6>
              </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <h6><small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small></h6>
        </main>
    </div>
</div>
@endsection