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
                        <h3>Reset your</h3>
                        <h2>Password</h2>
                        <div class="formWidgetBlock mt-3">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                                <button type="submit" class="bannerButton">
                                    {{ __('Reset Password') }}
                                </button>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
