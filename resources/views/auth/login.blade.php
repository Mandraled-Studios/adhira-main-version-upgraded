@extends('layouts.guest')

@section('content')
<section class="adminSection">
    <div class="bannerHero">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <div class="bannerLeft">
                        <div class="logo">
                            <img src="images/footerLogo.svg" alt="Logo" class="img-fluid">
                        </div>
                        <div class="quote">
                            <h1><span>You Do Today, </span> Not Tomorrow !</h1>
                        </div>
                    </div>
                </div>


                <div class="col-lg-5">
                    <div class="adminLoginBlock">
                        <h3>Hey, Welcome to</h3>
                        <h2>Admin Dashboard</h2>
                        <div class="formWidgetBlock mt-3">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter Your Name">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!-- <div class="recaptcha"></div> -->
                                <div class="mb-4">
                                    <input class="ml-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <input type="submit" value="LOGIN MY ACCOUNT" class="bannerButton">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="copymainblock">
                <div class="row justify-content-between">

                    <div class="col-md-6 col-12">
                        <div class="copyrightblock">
                            &copy; Copyright 2022 & All Rights Reserved For www.adhiraassociates.com
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="designblock">
                            Design & Developed by <a href="#">MaghizhmadhiMediaWorks</a> & <a
                                href="#">MandraledStudios.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
@endsection

{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--}}
