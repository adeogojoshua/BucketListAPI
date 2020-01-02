@extends('layouts.custom')

@section('content')
<div class="section  section-signup mt-4">
    <br/><br/>
    <div class="static-image">
        <div class="container">
            <div class="row">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="col-md-4 col-md-offset-4 text-center">
                            <h2 class="text-white">Register</h2>

                            <div class="separator separator-danger">✻</div>

                            <div class="form-group">
                                <input id="username" placeholder="Username" type="text" class="form-control form-control-plain @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" placeholder="Email" type="email" class="form-control form-control-plain @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" placeholder="Password" type="password" class="form-control form-control-plain @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control form-control-plain" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <p>
                                By signing up you agree to
                                <a href="signup.html">
                                    <span class="text-danger">
                                        Terms of Service
                                    </span>
                                </a> and
                                <a href="signup.html">
                                    <span class="text-danger" >
                                        Privacy Policy
                                    </span>
                                </a>
                            </p>
                            <div class="button-signin">
                                <button class="btn btn-danger btn-round btn-fill btn-wd">
                                    Sign Up
                                </button>
                            </div>
                            <p>
                                Or use an existing <a href="{{ route('login') }}" class="text-danger">account</a>.
                            </p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
