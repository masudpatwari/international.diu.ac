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
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        {{ Form::open(['route' => 'password.email', 'class' => '']) }}
        <div class="diu-fg form-group">
            {{ Form::label('email', 'E-Mail Address') }}
            {{ Form::email('email', NULL, ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'required'])  }}
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        {{ Form::button('<i class="ti-arrow-right"></i> Send Password Reset Link', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
        {{ link_to_route('login', 'Back to login', NULL, ['class' => 'diu-login-btn ml-3']) }}

        {{ Form::close() }}
    </div>
</section>
@endsection
