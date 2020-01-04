@extends('layouts.custom')

@section('content')

    <div class="section section-signin">

            <div class="image-container">
                <div class="filter filter-color-black"  style="background-image: url('../assets/img/header-9.jpeg')">
                    <div class="col-md-8 col-md-offset-1">
                        <div class="content">
                            <div class="title-area">
                                <h1 class="title-modern">{{ config('app.name', 'Laravel') }}</h1>
                                <h3>{{ config('app.desc', 'Laravel') }}</h3>
                            </div>

                            <h5 class="subtitle">First Feature</h5>
                            <p>Something Important
                            </p>
                            <h5 class="subtitle">Second Feature</h5>
                            <p>Something Important
                            </p>
                            <h5 class="subtitle">Third Feature</h5>
                            <p>Something Important
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 text-center">

                        <div class="title-area">
                            <h2>Login</h2>
                            <div class="separator separator-danger">✻</div>
                        </div>

                        <label><h4 class="text-gray">Your username</h4></label>
                        <div class="form-group">
                            <input id="username" type="text" class="form-control form-control-plain @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <label><h4 class="text-gray">Your password</h4></label>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control form-control-plain @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="&#x25CF;&#x25CF;&#x25CF;&#x25CF;&#x25CF;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <label><h4 class="text-gray">{{ __('Remember Me') }}</h4></label>
                        <div class="form-group">
                            <input class="form-check-input form-control-plain" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        </div>
                        
                        <div class="footer">
                            <button class="btn btn-danger btn-round btn-fill btn-wd">
                                Login
                            </button>
                            <br/><br/>
                            <a class="btn btn-danger btn-round " href="{{ route('password.request') }}">
                                 {{ __('Forgot Your Password?') }}
                            </a>
                            <p class="text-gray info">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
                        </div>
                    </div>
                </form>
            </div>
    </div>
@endsection
