@extends('admin.layouts.layout')
@section('content')
    <div class="card mx-auto" style="max-width: 768px">
        <div class="card-body">
            {{ Form::open(['route' => 'agent.profile.update', 'method' => 'PUT', 'files' => true]) }}
            <div class="form-group">
                {{ Form::label('name', 'Name Of Agent') }}
                {{ Form::text('name', $profile->name, ['class' => ['form-control', $errors->has('name') ? ' is-invalid' : ''], 'required'])  }}
                @if ($errors->has('name'))
                    <span class="form-text text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::select('type_of_agent', ['company' => 'Company', 'individual' => 'Individual'], $profile->relAgent->type_of_agent, ['placeholder' => 'Type of Agent', 'class' => 'form-control custom-select', 'required' => '']) }}
                    @if ($errors->has('type_of_agent'))
                        <span class="form-text text-danger">{{ $errors->first('type_of_agent') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::select('country_name', (!empty($country)) ? $country : [], $profile->relAgent->country_name, ['placeholder' => 'Country Name', 'class' => 'form-control custom-select', 'required' => '']) }}
                    @if ($errors->has('country_name'))
                        <span class="form-text text-danger">{{ $errors->first('country_name') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('present_address', 'Present address/Office Address') }}
                {{ Form::textarea('present_address', $profile->relAgent->present_address, ['class' => 'form-control', 'rows' => ''])  }}
                @if ($errors->has('present_address'))
                    <span class="form-text text-danger">{{ $errors->first('present_address') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('present_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('present_mobile_no', $profile->relAgent->present_mobile_no, ['class' => 'form-control', 'required' => ''])  }}
                    @if ($errors->has('present_mobile_no'))
                        <span class="form-text text-danger">{{ $errors->first('present_mobile_no') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('present_fax_no', 'Fax Number') }}
                    {{ Form::text('present_fax_no', $profile->relAgent->present_fax_no, ['class' => 'form-control'])  }}
                    @if ($errors->has('present_fax_no'))
                        <span class="form-text text-danger">{{ $errors->first('present_fax_no') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('permanent_address', 'Permanent Address/Registered Office') }}
                {{ Form::textarea('permanent_address', $profile->relAgent->permanent_address, ['class' => 'form-control', 'rows' => ''])  }}
                @if ($errors->has('permanent_address'))
                    <span class="form-text text-danger">{{ $errors->first('permanent_address') }}</span>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('permanent_lan_phone_no', 'Lan Phone Number') }}
                    {{ Form::text('permanent_lan_phone_no', $profile->relAgent->permanent_lan_phone_no, ['class' => 'form-control'])  }}
                    @if ($errors->has('per_lan_phone_no'))
                        <span class="form-text text-danger">{{ $errors->first('permanent_lan_phone_no') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('permanent_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('permanent_mobile_no', $profile->relAgent->permanent_mobile_no, ['class' => 'form-control', 'required' => ''])  }}
                    @if ($errors->has('permanent_mobile_no'))
                        <span class="form-text text-danger">{{ $errors->first('permanent_mobile_no') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('permanent_fax_no', 'Fax Number') }}
                    {{ Form::text('permanent_fax_no', $profile->relAgent->permanent_fax_no, ['class' => 'form-control'])  }}
                    @if ($errors->has('permanent_fax_no'))
                        <span class="form-text text-danger">{{ $errors->first('permanent_fax_no') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('primary_person_name', 'Authorized Person Name') }}
                    {{ Form::text('primary_person_name', $profile->relAgent->primary_person_name, ['class' => 'form-control'])  }}
                    @if ($errors->has('primary_person_name'))
                        <span class="form-text text-danger">{{ $errors->first('primary_person_name') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('primary_person_designation', 'Designation') }}
                    {{ Form::text('primary_person_designation', $profile->relAgent->primary_person_designation, ['class' => 'form-control'])  }}
                    @if ($errors->has('primary_person_designation'))
                        <span class="form-text text-danger">{{ $errors->first('primary_person_designation') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('primary_person_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('primary_person_mobile_no', $profile->relAgent->primary_person_mobile_no, ['class' => 'form-control'])  }}
                    @if ($errors->has('primary_person_mobile_no'))
                        <span class="form-text text-danger">{{ $errors->first('primary_person_mobile_no') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('primary_person_email', 'E-mail Address') }}
                    {{ Form::email('primary_person_email', $profile->relAgent->primary_person_email, ['class' => 'form-control'])  }}
                    @if ($errors->has('primary_person_email'))
                        <span class="form-text text-danger">{{ $errors->first('primary_person_email') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('primary_person_photo', 'Photograph (Image)') }}
                    {{ Form::file('primary_person_photo', NULL, ['class' => ''])  }}
                    @if ($errors->has('primary_person_photo'))
                        <span class="form-text text-danger">{{ $errors->first('primary_person_photo') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('secondary_person_name', 'Authorized Person Name') }}
                    {{ Form::text('secondary_person_name', $profile->relAgent->secondary_person_name, ['class' => 'form-control'])  }}
                    @if ($errors->has('secondary_person_name'))
                        <span class="form-text text-danger">{{ $errors->first('secondary_person_name') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('secondary_person_designation', 'Designation') }}
                    {{ Form::text('secondary_person_designation', $profile->relAgent->secondary_person_designation, ['class' => 'form-control'])  }}
                    @if ($errors->has('secondary_person_designation'))
                        <span class="form-text text-danger">{{ $errors->first('secondary_person_designation') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('secondary_person_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('secondary_person_mobile_no', $profile->relAgent->secondary_person_mobile_no, ['class' => 'form-control'])  }}
                    @if ($errors->has('secondary_person_mobile_no'))
                        <span class="form-text text-danger">{{ $errors->first('secondary_person_mobile_no') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('secondary_person_email', 'E-mail Address') }}
                    {{ Form::email('secondary_person_email', $profile->relAgent->secondary_person_email, ['class' => 'form-control'])  }}
                    @if ($errors->has('secondary_person_email'))
                        <span class="form-text text-danger">{{ $errors->first('secondary_person_email') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('secondary_person_photo', 'Photograph (Image)') }}
                    {{ Form::file('secondary_person_photo', NULL, ['class' => ''])  }}
                    @if ($errors->has('secondary_person_photo'))
                        <span class="form-text text-danger">{{ $errors->first('secondary_person_photo') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('trade_license', 'Trade License (Image)') }}
                {{ Form::file('trade_license', NULL, ['class' => ''])  }}
                @if ($errors->has('trade_license'))
                    <span class="form-text text-danger">{{ $errors->first('trade_license') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('tin_certificate', 'Tin/Tax Certificate (Image)') }}
                {{ Form::file('tin_certificate', NULL, ['class' => ''])  }}
                @if ($errors->has('tin_certificate'))
                    <span class="form-text text-danger">{{ $errors->first('tin_certificate') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('whatsup_no', 'Whatsup Number') }}
                {{ Form::text('whatsup_no', $profile->relAgent->whatsup_no, ['class' => 'form-control'])  }}
                @if ($errors->has('whatsup_no'))
                    <span class="form-text text-danger">{{ $errors->first('whatsup_no') }}</span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('profile_photo', 'Profile Photo') }}
                {{ Form::file('profile_photo', NULL, ['class' => ''])  }}
                @if ($errors->has('profile_photo'))
                    <span class="form-text text-danger">{{ $errors->first('profile_photo') }}</span>
                @endif
            </div>
            {{ Form::button('Submit', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection