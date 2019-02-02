@extends('layouts.master')
@section('content')
<div class="diu-page-title text-center text-light">
    <div class="container">
        <div class="diu-z-index-up">
            <h3>{{ __('Reset Password') }}</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
    </div>
</div>
<section class="diu-contact-us diu-section-bg">
    <div class="container diu-left-bottom">
        {{ Form::open(['route' => 'password.update']) }}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="diu-fg form-group">
            {{ Form::label('email', 'E-Mail Address') }}
            {{ Form::email('email', $email, ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'required'])  }}
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="diu-fg form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => ['form-control', $errors->has('password') ? ' is-invalid' : ''], 'required'])  }}
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="diu-fg form-group">
            {{ Form::label('password_confirmation', 'Confirm Password') }}
            {{ Form::password('password_confirmation', ['class' => ['form-control', $errors->has('password') ? ' is-invalid' : ''], 'required'])  }}
            @if ($errors->has('password_confirmation'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>

        {{ Form::button('<i class="ti-arrow-right"></i> Reset Password', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
        {{ link_to_route('login', 'Back to login', NULL, ['class' => 'diu-login-btn ml-3']) }}
        {{ Form::close() }}
    </div>
</section>
@endsection
