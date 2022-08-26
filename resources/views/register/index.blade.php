@extends('layout.main')

@section('container')
<div class="row justify-content-center mb-3">

    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" required class="invalid form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
                        <label for="floatingInput">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" required class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
                        <label for="floatingInput">Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" required class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" required class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
            
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
                </form>
                <small class="mt-3 d-block text-center">Already registerd? <a href="/login">Login</a></small>
        </main>
    </div>
</div>

@endsection