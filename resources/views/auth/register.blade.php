@extends('layouts.master')
@section('content')
    <div class="diu-page-title text-center text-light">
        <div class="container">
            <div class="diu-z-index-up">
                <h3>Registration as Student</h3>
                <p>Here you can review some statistics about our Education Center</p>
            </div>
        </div>
    </div>
    <section class="diu-contact-us diu-section-bg">
        <div class="container diu-left-bottom">
            {{ Form::open(['route' => 'register', 'class' => '']) }}
            @if (session()->has('message'))
                @component('alert')
                    @if (session()->has('message.success'))
                        <strong>Thank You!</strong>!
                    @endif
                    @if (session()->has('message.error'))
                        <strong>Failed!</strong>!
                    @endif
                @endcomponent
            @endif
            <div class="form-row">
                <div class="diu-fg form-group col-md-6">
                    {{ Form::label('first_name', 'First Name') }}
                    {{ Form::text('first_name', NULL, ['class' => ['form-control', $errors->has('first_name') ? ' is-invalid' : ''], 'required'])  }}
                    @if ($errors->has('first_name'))
                        <span class="form-text text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group col-md-6">
                    {{ Form::label('last_name', 'Last Name') }}
                    {{ Form::text('last_name', NULL, ['class' => ['form-control', $errors->has('last_name') ? ' is-invalid' : ''], 'required'])  }}
                    @if ($errors->has('last_name'))
                        <span class="form-text text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="diu-fg form-group col-md-6">
                    {{ Form::select('interested_subject', $courses, NULL, ['placeholder' => 'Interested Subject', 'class' => ['form-control', 'custom-select', $errors->has('interested_subject') ? ' is-invalid' : ''], 'required']) }}
                    @if ($errors->has('interested_subject'))
                        <span class="form-text text-danger">{{ $errors->first('interested_subject') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group col-md-6">
                    {{ Form::select('present_nationality', (!empty($country)) ? $country : [], NULL, ['placeholder' => 'Present Nationality', 'class' => ['form-control', 'custom-select', $errors->has('present_nationality') ? ' is-invalid' : ''], 'required']) }}
                    @if ($errors->has('present_nationality'))
                        <span class="form-text text-danger">{{ $errors->first('present_nationality') }}</span>
                    @endif
                </div>
            </div>
            <div class="diu-fg form-group">
                {{ Form::label('email', 'E-mail Address') }}
                {{ Form::email('email', NULL, ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'required'])  }}
                @if ($errors->has('email'))
                    <span class="form-text text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="diu-fg form-group">
                {{ Form::label('password', 'Password (min 6 char)') }}
                {{ Form::password('password', ['class' => ['form-control', $errors->has('password') ? ' is-invalid' : ''], 'required'])  }}
                @if ($errors->has('password'))
                    <span class="form-text text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            {{ Form::button('Register', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
            {{ link_to_route('login', 'Back to login', NULL, ['class' => 'diu-login-btn ml-3']) }}
            {{ Form::close() }}
        </div>
    </section>
@endsection