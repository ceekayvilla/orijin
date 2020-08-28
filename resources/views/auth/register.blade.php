@extends('themes.orijin.template-parts.content')

@section('page_title')
 Sign Up
@endsection

@section('appcontent')
    <div class="col-md-12 lets-sign">
        <div class="talk">
            <img src="{{ asset('resources/css/images/talk-to-nigeria.png')}}" />
            <h1 class="heading-sign">Sign Up</h1>
        </div>

            <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row row-form">

                            <div class="col-md-6 form-group">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="off" autofocus placeholder="First Name">

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group">
                                <input id="last_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="off" autofocus placeholder="Last Name">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group">
                                <input id="birthday" type="text" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="off" autofocus placeholder="Birthday">

                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-6 form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-6 form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off" placeholder="Confirm Password">
                            </div>

                            <button type="submit" class="btn btn-secondary btn-block">
                                    {{ __('Sign Up') }}
                                </button>
                            </div>
                    </form>
    </div>
<{{ __('Register') }}

@endsection
