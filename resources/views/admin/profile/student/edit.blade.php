@extends('admin.layouts.layout')
@section('content')
    <div class="card mx-auto" style="max-width: 768px">
        <div class="card-body">
            {{ Form::open(['route' => ['agent.profile.update'], 'method' => 'PUT', 'files' => true, 'id' => 'agentRegister']) }}
            <div class="form-group">
                {{ Form::label('name_of_agent', 'Name of Agent') }}
                {{ Form::text('name_of_agent', $agent->relUser->name, ['class' => 'form-control', 'required' => ''])  }}
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::select('type_of_agent', ['company' => 'Company', 'individual' => 'Individual'], $agent->type_of_agent, ['placeholder' => 'Type of Agent', 'class' => 'form-control custom-select', 'required' => '']) }}
                </div>
                <div class="form-group col-md-6">
                    {{ Form::select('country_name', $country, $agent->country_name, ['placeholder' => 'Country Name', 'class' => 'form-control custom-select', 'required' => '']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('email', 'E-mail Address') }}
                {{ Form::email('email', $agent->relUser->email, ['class' => 'form-control', 'required' => ''])  }}
            </div>
            <div class="form-group">
                {{ Form::label('pra_address', 'Present address/Office Address') }}
                {{ Form::textarea('pra_address', $agent->pra_address, ['class' => 'form-control', 'rows' => ''])  }}
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('pra_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('pra_mobile_no', $agent->pra_mobile_no, ['class' => 'form-control', 'required' => ''])  }}
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('pra_fax_no', 'Fax Number') }}
                    {{ Form::text('pra_fax_no', $agent->pra_fax_no, ['class' => 'form-control'])  }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('per_address', 'Permanent Address/Registered Office') }}
                {{ Form::textarea('per_address', $agent->per_address, ['class' => 'form-control', 'rows' => ''])  }}
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('per_lan_phone_no', 'Lan Phone Number') }}
                    {{ Form::text('per_lan_phone_no', $agent->per_lan_phone_no, ['class' => 'form-control'])  }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('per_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('per_mobile_no', $agent->per_mobile_no, ['class' => 'form-control', 'required' => ''])  }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('per_fax_no', 'Fax Number') }}
                    {{ Form::text('per_fax_no', $agent->per_fax_no, ['class' => 'form-control'])  }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('pri_person_name', 'Authorized Person Name') }}
                    {{ Form::text('pri_person_name', $agent->pri_person_name, ['class' => 'form-control'])  }}
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('pri_designation', 'Designation') }}
                    {{ Form::text('pri_designation', $agent->pri_designation, ['class' => 'form-control'])  }}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('pri_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('pri_mobile_no', $agent->pri_mobile_no, ['class' => 'form-control'])  }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('pri_email', 'E-mail Address') }}
                    {{ Form::email('pri_email', $agent->pri_email, ['class' => 'form-control'])  }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('pri_photo', 'Photograph (Image)') }}
                    {{ Form::file('pri_photo', NULL, ['class' => ''])  }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('sec_person_name', 'Authorized Person Name') }}
                    {{ Form::text('sec_person_name', $agent->sec_person_name, ['class' => 'form-control'])  }}
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('sec_designation', 'Designation') }}
                    {{ Form::text('sec_designation', $agent->sec_designation, ['class' => 'form-control'])  }}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('sec_mobile_no', 'Mobile Phone No') }}
                    {{ Form::text('sec_mobile_no', $agent->sec_mobile_no, ['class' => 'form-control'])  }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('sec_email', 'E-mail Address') }}
                    {{ Form::email('sec_email', $agent->sec_email, ['class' => 'form-control'])  }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('sec_photo', 'Photograph (Image)') }}
                    {{ Form::file('sec_photo', NULL, ['class' => ''])  }}
                </div>
            </div>
            <div class="form-group focused">
                {{ Form::label('trade_license', 'Trade License (Image)') }}
                {{ Form::file('trade_license', NULL, ['class' => ''])  }}
            </div>
            <div class="form-group focused">
                {{ Form::label('tin_certificate', 'Tin/Tax Certificate (Image)') }}
                {{ Form::file('tin_certificate', NULL, ['class' => ''])  }}
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('whatsup_no', 'Whatsup Number') }}
                    {{ Form::text('whatsup_no', $agent->whatsup_no, ['class' => 'form-control'])  }}
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('status', 'Status') }}
                    {{ Form::select('status', ['active' => 'Active', 'inactive' => 'Inactive'], $agent->status, ['placeholder' => 'Select Status', 'class' => 'form-control custom-select']) }}
                </div>
            </div>
            {{ Form::button('<i class="ti-arrow-right"></i> Update', ['type'=>'submit', 'class' => 'btn btn-sm btn-success']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection