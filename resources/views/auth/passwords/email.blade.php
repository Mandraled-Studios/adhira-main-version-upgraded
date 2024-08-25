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
                        <h3>Send Password</h3>
                        <h2>Reset Link</h2>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="formWidgetBlock mt-3">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <label for="email" class="">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <button type="submit" class="bannerButton">
                                    {{ __('Send Password Reset Link') }}
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
