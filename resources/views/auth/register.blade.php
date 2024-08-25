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
                        <h2>Adhira Associates</h2>
                        <div class="formWidgetBlock mt-3">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf    
                                <label for="name" class="">{{ __('Name') }}</label>

                                
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                 
                                <label for="email" class="">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                                <label for="password" class="">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        
                                <button type="submit" class="bannerButton">
                                    {{ __('Register') }}
                                </button>
                            
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
