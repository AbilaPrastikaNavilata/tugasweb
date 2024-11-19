@extends('layouts.app')

@section('content')

<style>
    .card {
        border-radius: 10px;
    }

    .card-body {
        border-radius: 10px;
    }

    .form-control {
        border-radius: 10px;
    }
</style>

<section class="login-section d-flex align-items-center justify-content-center overlay" style="min-height: 100vh; background-image: url(img/buku.jpg); background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" required autocomplete="email" autofocus placeholder="Enter email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary rounded-2 mt-2">Login</button>
                            <p class="text-center mt-3">Belum punya akun? <a href="{{route('register')}}">Buat Akun</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection