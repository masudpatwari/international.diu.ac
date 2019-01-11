@extends('admin.layouts.layout')
@section('content')
    <div class="card mx-auto" style="max-width: 768px">
        <div class="card-body">
            {{ Form::open(['route' => 'agent.profile.update', 'method' => 'PUT', 'files' => true]) }}
            <div class="form-row">
                <div class="diu-fg form-group col-md-6">
                    {{ Form::label('first_name', 'First Name') }}
                    {{ Form::text('first_name', $profile->first_name, ['class' => ['form-control', $errors->has('first_name') ? ' is-invalid' : ''], 'required'])  }}
                    @if ($errors->has('first_name'))
                        <span class="form-text text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group col-md-6">
                    {{ Form::label('last_name', 'Last Name') }}
                    {{ Form::text('last_name', $profile->last_name, ['class' => ['form-control', $errors->has('last_name') ? ' is-invalid' : ''], 'required'])  }}
                    @if ($errors->has('last_name'))
                        <span class="form-text text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="diu-fg form-group col-md-6">
                    {{ Form::select('type_of_agent', ['company' => 'Company', 'individual' => 'Individual'], $profile->relAgent->type_of_agent, ['placeholder' => 'Type of Agent', 'class' => 'form-control custom-select', 'required' => '']) }}
                    @if ($errors->has('type_of_agent'))
                        <span class="form-text text-danger">{{ $errors->first('type_of_agent') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group col-md-6">
                    {{ Form::select('country_name', (!empty($country)) ? $country : [], $profile->relAgent->country_name, ['placeholder' => 'Country Name', 'class' => 'form-control custom-select', 'required' => '']) }}
                    @if ($errors->has('country_name'))
                        <span class="form-text text-danger">{{ $errors->first('country_name') }}</span>
                    @endif
                </div>
            </div>
            <div class="diu-fg form-group">
                {{ Form::label('present_address', 'Present address/Office Address') }}
                {{ Form::textarea('present_address', $profile->relAgent->present_address, ['class' => 'form-control', 'rows' => ''])  }}
                @if ($errors->has('present_address'))
                    <span class="form-text text-danger">{{ $errors->first('present_address') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="diu-fg form-group col-md-6">
                    {{ Form::label('present_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('present_mobile_no', $profile->relAgent->present_mobile_no, ['class' => 'form-control', 'required' => ''])  }}
                    @if ($errors->has('present_mobile_no'))
                        <span class="form-text text-danger">{{ $errors->first('present_mobile_no') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group col-md-6">
                    {{ Form::label('present_fax_no', 'Fax Number') }}
                    {{ Form::text('present_fax_no', $profile->relAgent->present_fax_no, ['class' => 'form-control'])  }}
                    @if ($errors->has('present_fax_no'))
                        <span class="form-text text-danger">{{ $errors->first('present_fax_no') }}</span>
                    @endif
                </div>
            </div>
            <div class="diu-fg form-group">
                {{ Form::label('permanent_address', 'Permanent Address/Registered Office') }}
                {{ Form::textarea('permanent_address', $profile->relAgent->permanent_address, ['class' => 'form-control', 'rows' => ''])  }}
                @if ($errors->has('permanent_address'))
                    <span class="form-text text-danger">{{ $errors->first('permanent_address') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="diu-fg form-group col-md-4">
                    {{ Form::label('permanent_lan_phone_no', 'Lan Phone Number') }}
                    {{ Form::text('permanent_lan_phone_no', $profile->relAgent->permanent_lan_phone_no, ['class' => 'form-control'])  }}
                    @if ($errors->has('per_lan_phone_no'))
                        <span class="form-text text-danger">{{ $errors->first('permanent_lan_phone_no') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group col-md-4">
                    {{ Form::label('permanent_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('permanent_mobile_no', $profile->relAgent->permanent_mobile_no, ['class' => 'form-control', 'required' => ''])  }}
                    @if ($errors->has('permanent_mobile_no'))
                        <span class="form-text text-danger">{{ $errors->first('permanent_mobile_no') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group col-md-4">
                    {{ Form::label('permanent_fax_no', 'Fax Number') }}
                    {{ Form::text('permanent_fax_no', $profile->relAgent->permanent_fax_no, ['class' => 'form-control'])  }}
                    @if ($errors->has('permanent_fax_no'))
                        <span class="form-text text-danger">{{ $errors->first('permanent_fax_no') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="diu-fg form-group col-md-6">
                    {{ Form::label('primary_person_name', 'Authorized Person Name') }}
                    {{ Form::text('primary_person_name', $profile->relAgent->primary_person_name, ['class' => 'form-control'])  }}
                    @if ($errors->has('primary_person_name'))
                        <span class="form-text text-danger">{{ $errors->first('primary_person_name') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group col-md-6">
                    {{ Form::label('primary_person_designation', 'Designation') }}
                    {{ Form::text('primary_person_designation', $profile->relAgent->primary_person_designation, ['class' => 'form-control'])  }}
                    @if ($errors->has('primary_person_designation'))
                        <span class="form-text text-danger">{{ $errors->first('primary_person_designation') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="diu-fg form-group col-md-4">
                    {{ Form::label('primary_person_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('primary_person_mobile_no', $profile->relAgent->primary_person_mobile_no, ['class' => 'form-control'])  }}
                    @if ($errors->has('primary_person_mobile_no'))
                        <span class="form-text text-danger">{{ $errors->first('primary_person_mobile_no') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group col-md-4">
                    {{ Form::label('primary_person_email', 'E-mail Address') }}
                    {{ Form::email('primary_person_email', $profile->relAgent->primary_person_email, ['class' => 'form-control'])  }}
                    @if ($errors->has('primary_person_email'))
                        <span class="form-text text-danger">{{ $errors->first('primary_person_email') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group diu-fg-file col-md-4">
                    {{ Form::label('primary_person_photo', 'Photograph (Image)') }}
                    {{ Form::file('primary_person_photo', $profile->relAgent->primary_person_photo, ['class' => ''])  }}
                    @if ($errors->has('primary_person_photo'))
                        <span class="form-text text-danger">{{ $errors->first('primary_person_photo') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="diu-fg form-group col-md-6">
                    {{ Form::label('secondary_person_name', 'Authorized Person Name') }}
                    {{ Form::text('secondary_person_name', $profile->relAgent->secondary_person_name, ['class' => 'form-control'])  }}
                    @if ($errors->has('secondary_person_name'))
                        <span class="form-text text-danger">{{ $errors->first('secondary_person_name') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group col-md-6">
                    {{ Form::label('secondary_person_designation', 'Designation') }}
                    {{ Form::text('secondary_person_designation', $profile->relAgent->secondary_person_designation, ['class' => 'form-control'])  }}
                    @if ($errors->has('secondary_person_designation'))
                        <span class="form-text text-danger">{{ $errors->first('secondary_person_designation') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="diu-fg form-group col-md-4">
                    {{ Form::label('secondary_person_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('secondary_person_mobile_no', $profile->relAgent->secondary_person_mobile_no, ['class' => 'form-control'])  }}
                    @if ($errors->has('secondary_person_mobile_no'))
                        <span class="form-text text-danger">{{ $errors->first('secondary_person_mobile_no') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group col-md-4">
                    {{ Form::label('secondary_person_email', 'E-mail Address') }}
                    {{ Form::email('secondary_person_email', $profile->relAgent->secondary_person_email, ['class' => 'form-control'])  }}
                    @if ($errors->has('secondary_person_email'))
                        <span class="form-text text-danger">{{ $errors->first('secondary_person_email') }}</span>
                    @endif
                </div>
                <div class="diu-fg form-group diu-fg-file col-md-4">
                    {{ Form::label('secondary_person_photo', 'Photograph (Image)') }}
                    {{ Form::file('secondary_person_photo', $profile->relAgent->secondary_person_photo, ['class' => ''])  }}
                    @if ($errors->has('secondary_person_photo'))
                        <span class="form-text text-danger">{{ $errors->first('secondary_person_photo') }}</span>
                    @endif
                </div>
            </div>
            <div class="diu-fg form-group diu-fg-file">
                {{ Form::label('trade_license', 'Trade License (Image)') }}
                {{ Form::file('trade_license', $profile->relAgent->trade_license, ['class' => ''])  }}
                @if ($errors->has('trade_license'))
                    <span class="form-text text-danger">{{ $errors->first('trade_license') }}</span>
                @endif
            </div>
            <div class="diu-fg form-group diu-fg-file">
                {{ Form::label('tin_certificate', 'Tin/Tax Certificate (Image)') }}
                {{ Form::file('tin_certificate', $profile->relAgent->tin_certificate, ['class' => ''])  }}
                @if ($errors->has('tin_certificate'))
                    <span class="form-text text-danger">{{ $errors->first('tin_certificate') }}</span>
                @endif
            </div>
            <div class="diu-fg form-group">
                {{ Form::label('whatsup_no', 'Whatsup Number') }}
                {{ Form::text('whatsup_no', $profile->relAgent->whatsup_no, ['class' => 'form-control'])  }}
                @if ($errors->has('whatsup_no'))
                    <span class="form-text text-danger">{{ $errors->first('whatsup_no') }}</span>
                @endif
            </div>
            {{ Form::button('Register', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
            {{ link_to_route('login', 'Back to login', NULL, ['class' => 'diu-login-btn ml-3']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection