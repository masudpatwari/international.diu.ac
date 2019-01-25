@extends('layouts.master')
@section('content')
<div class="diu-page-title text-center text-light">
    <div class="container">
        <div class="diu-z-index-up">
            <h3>Contact Us</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
    </div>
</div>
<section class="diu-contact-us diu-section-bg">
    <div class="container diu-left-bottom">
        {{ Form::open(['route' => 'ticket.create', 'class' => '']) }}
        @if (session()->has('message'))
            @component('alert')
            @endcomponent
        @endif
        <div class="diu-fg form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', NULL, ['class' => ['form-control', $errors->has('name') ? ' is-invalid' : ''], 'required'])  }}
            @if ($errors->has('name'))
                <span class="form-text text-danger">{{ $errors->first('name') }}</span>
            @endif
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
            {{ Form::label('body', 'Details (min 200 char)') }}
            {{ Form::textarea('body', NULL, ['class' => 'form-control', 'required'])  }}
            @if ($errors->has('body'))
                <span class="form-text text-danger">{{ $errors->first('body') }}</span>
            @endif
        </div>
        {{ Form::button('<i class="ti-arrow-right"></i> Submit', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
        {{ Form::close() }}
    </div>
</section>
<section class="diu-google-map" id="diu-map"></section>
@endsection