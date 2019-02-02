@extends('layouts.master')
@section('content')
<div class="diu-page-title text-center text-light">
    <div class="container">
        <div class="diu-z-index-up">
            <h3>{{ __('Verify Your Email Address') }}</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
    </div>
</div>
<section class="diu-contact-us diu-section-bg text-center">
    <div class="container diu-left-bottom pt-5 pb-5">
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif

        <h5>
            {{ __('Before proceeding, please check your email for a verification link.') }}
        </h5>
        <h6>
            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
        </h6>
    </div>
</section>
@endsection
