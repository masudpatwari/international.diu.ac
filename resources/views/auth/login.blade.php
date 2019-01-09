@extends('layouts.master')
@section('content')
<div class="diu-page-title text-center text-light">
    <div class="container">
        <div class="diu-z-index-up">
            <h3>Login</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
    </div>
</div>

<section class="diu-contact-us diu-section-bg">
    <div class="container diu-left-bottom">
        {{ Form::open(['route' => 'login', 'class' => '']) }}
        <div class="diu-fg form-group">
            {{ Form::label('email', 'E-Mail Address') }}
            {{ Form::email('email', NULL, ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'required'])  }}
            @if ($errors->has('email'))
                <span class="form-text text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="diu-fg form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => ['form-control', $errors->has('password') ? ' is-invalid' : ''], 'required'])  }}
            @if ($errors->has('password'))
                <span class="form-text text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="custom-control custom-checkbox">
                    <input id="remember" type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label pt-1" for="remember">{{ __('Remember Me') }}</label>
                </div>
            </div>
            <div class="form-group col-md-6">
                @if (Route::has('password.request'))
                <p class="mt-1 text-right">
                    <a href="{{ route('password.request') }}" class="diu-forgot-password-btn">{{ __('Forgot Your Password?') }}</a>
                </p>
                @endif
            </div>
        </div>
        {{ Form::button('Login', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}

        <div class="diu-lr-footer d-block text-center">
            <p class="text-muted">Don't have an account?</p>
            <p class="pt-2">
                <a href="{{ route('register') }}" class="diu-registration-btn">Registration as student</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('register.agent') }}" class="diu-registration-btn">Registration as agent</a>
            </p>
        </div>

        {{ Form::close() }}
    </div>
</section>
@endsection
