@extends('layouts.app')
    @section('content')
        <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Sign In Now</h2>
                <form method="POST" action="{{ URL::to('/admin-dashboard') }}">
                    @csrf
                    <input id="email" type="email" class="ggg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-MAIL">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
{{--                            <strong>{{ $message }}</strong>--}}
                            <strong>Sai mail</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" class="ggg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="PASSWORD">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>Sai mật khẩu</strong>
                        </span>
                    @enderror
                    <span><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me</span>
                    <h6>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </h6>
                    <div class="clearfix"></div>
                    <input type="submit" value="Sign In" name="login"/>
                </form>
                <p>Don't Have an Account ?<a class="nav-link" href="{{ route('register') }}">{{ __('Create an account') }}</a></p>
        </div>
        </div>
    @endsection

