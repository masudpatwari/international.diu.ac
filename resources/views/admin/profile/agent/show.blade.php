@extends('admin.layouts.layout')
@section('content')
    <div class="card mx-auto" style="max-width: 768px">
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Agent No</dt>
                <dd class="col-sm-9">{{ $agent->agent_no }}</dd>
                <dt class="col-sm-3">Name of Agent</dt>
                <dd class="col-sm-9">{{ $agent->relUser->name }}</dd>
                <dt class="col-sm-3">Type of Agent</dt>
                <dd class="col-sm-9">
                    <p class="text-capitalize">{{ $agent->type_of_agent }}</p>
                </dd>
                <dt class="col-sm-3">Country Name</dt>
                <dd class="col-sm-9">{{ $agent->country_name }}</dd>
                <dt class="col-sm-3">E-mail Address</dt>
                <dd class="col-sm-9">{{ $agent->relUser->email }}</dd>
                <dt class="col-sm-3">Present address/Office Address</dt>
                <dd class="col-sm-9">
                    <dl class="row">
                        <dd class="col-sm-12">{{ $agent->pra_address }}</dd>
                        <dt class="col-sm-4">Mobile Phone No</dt>
                        <dd class="col-sm-8">{{ $agent->pra_mobile_no }}</dd>
                        <dt class="col-sm-4">Fax Number</dt>
                        <dd class="col-sm-8">{{ $agent->pra_fax_no }}</dd>
                    </dl>
                </dd>
                <dt class="col-sm-3">Permanent Address/Registered Office</dt>
                <dd class="col-sm-9">
                    <dl class="row">
                        <dd class="col-sm-12">{{ $agent->per_address }}</dd>
                        <dt class="col-sm-4">Lan Phone Number</dt>
                        <dd class="col-sm-8">{{ $agent->per_lan_phone_no }}</dd>
                        <dt class="col-sm-4">Mobile Phone No</dt>
                        <dd class="col-sm-8">{{ $agent->per_mobile_no }}</dd>
                        <dt class="col-sm-4">Fax Number</dt>
                        <dd class="col-sm-8">{{ $agent->per_fax_no }}</dd>
                    </dl>
                </dd>
                <dt class="col-sm-3">Authorized Person Name</dt>
                <dd class="col-sm-9">
                    <dl class="row">
                        <dd class="col-sm-12">{{ $agent->pri_person_name }}</dd>
                        <dt class="col-sm-4">Designation</dt>
                        <dd class="col-sm-8">{{ $agent->pri_designation }}</dd>
                        <dt class="col-sm-4">Mobile Phone No</dt>
                        <dd class="col-sm-8">{{ $agent->pri_mobile_no }}</dd>
                        <dt class="col-sm-4">E-mail Address</dt>
                        <dd class="col-sm-8">{{ $agent->pri_email }}</dd>
                    </dl>
                </dd>
                <dt class="col-sm-3">Authorized Person Name</dt>
                <dd class="col-sm-9">
                    <dl class="row">
                        <dd class="col-sm-12">{{ $agent->sec_person_name }}</dd>
                        <dt class="col-sm-4">Designation</dt>
                        <dd class="col-sm-8">{{ $agent->sec_designation }}</dd>
                        <dt class="col-sm-4">Mobile Phone No</dt>
                        <dd class="col-sm-8">{{ $agent->sec_mobile_no }}</dd>
                        <dt class="col-sm-4">E-mail Address</dt>
                        <dd class="col-sm-8">{{ $agent->sec_email }}</dd>
                    </dl>
                </dd>
                <dt class="col-sm-3">Whatsup Number</dt>
                <dd class="col-sm-9">{{ $agent->whatsup_no }}</dd>
            </dl>
            {{--{{ link_to_route('agent.profile.edit', 'Edit', NULL, ['class' => 'btn btn-sm btn-primary']) }}--}}
        </div>
    </div>
@endsection