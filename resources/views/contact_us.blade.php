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
        {{ Form::open(['class' => '']) }}
        <div class="form-row">
            <div class="diu-fg form-group col-md-6">
                {{ Form::label('first_name', 'First Name') }}
                {{ Form::text('first_name', NULL, ['class' => 'form-control', 'required'])  }}
            </div>
            <div class="diu-fg form-group col-md-6">
                {{ Form::label('last_name', 'Last Name') }}
                {{ Form::text('last_name', NULL, ['class' => 'form-control', 'required'])  }}
            </div>
        </div>
        <div class="form-row">
            <div class="diu-fg form-group col-md-6">
                {{ Form::select('interested_sub', ['One','Two','Three'], NULL, ['placeholder' => 'Interested Subject', 'class' => 'form-control custom-select', 'required']) }}
            </div>
            <div class="diu-fg form-group col-md-6">
                {{ Form::select('pra_nationality', (!empty($country)) ? $country : [], NULL, ['placeholder' => 'Present Nationality', 'class' => 'form-control custom-select', 'required']) }}
            </div>
        </div>
        <div class="diu-fg form-group">
            {{ Form::label('email', 'E-mail Address') }}
            {{ Form::email('email', NULL, ['class' => 'form-control', 'required'])  }}
        </div>
        <div class="diu-fg form-group">
            {{ Form::label('details', 'Details (min 200 char)') }}
            {{ Form::textarea('details', NULL, ['class' => 'form-control', 'required'])  }}
        </div>
        {{ Form::button('<i class="ti-arrow-right"></i> Submit', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
        {{ Form::close() }}
    </div>
</section>
<section class="diu-google-map" id="diu-map"></section>
@endsection