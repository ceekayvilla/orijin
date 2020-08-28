@extends('themes.orijin.template-parts.content')

@section('page_title')
 Login
@endsection

@section('appcontent')

<div class="col-md-12 lets-sign">
    <div class="talk">
        <img src="{{ asset('resources/css/images/talk-to-nigeria.png')}}" />
        <h1 class="heading-sign">{{ __('Login') }}</h1>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row row-form">

               <!--  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                <div class="col-md-12 form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus placeholder="Email Address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
 -->
                <div class="col-md-12 form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-secondary btn-block">
                        {{ __('Login') }}
                    </button>

            <div class="col-md-12 form">
                <div class="col-md-8 offset-md-4">
                    
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
@endsection
