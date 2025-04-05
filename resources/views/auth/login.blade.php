@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5" style="background-image:url({{ asset('static/resfile/images/backgroundlogin.jpg' )}}); ">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-8 mt-5 ">
            <div class="card mt-5 ">


                <div class="card-body mt-5 mb-5">
                    <form method="POST" action="{{ route('login') }}" class="mt-5">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-12  text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                   </div>
                                   <div class="mt-2 col-12 text-center">

                                @if (Route::has('register'))


                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Create Account') }}</a>

                                @endif
                            </div>

                                <div class="mt-2 col-12 text-center">

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
