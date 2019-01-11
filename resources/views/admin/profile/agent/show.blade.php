@extends('admin.layouts.layout')
@section('content')
    <div class="card mx-auto" style="max-width: 768px">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="form-control-plaintext">
                        <strong>First Name : </strong>
                        {{ $profile->first_name }}
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="form-control-plaintext">
                        <strong>Last Name : </strong>
                        {{ $profile->last_name }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="form-control-plaintext text-capitalize">
                        <strong>Type of Agent : </strong>
                        {{ $profile->relAgent->type_of_agent }}
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="form-control-plaintext">
                        <strong>Country Name : </strong>
                        {{ $profile->relAgent->country_name }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="form-control-plaintext">
                        <strong>E-mail Address : </strong>
                        {{ $profile->email }}
                    </p>
                </div>
            </div>
            <hr>
            <div class="">
                <p class="form-control-plaintext">
                    <strong>Present address/Office Address : </strong>
                    {{ $profile->relAgent->present_address }}
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="form-control-plaintext">
                        <strong>Mobile Phone No : </strong>
                        {{ $profile->relAgent->present_mobile_no }}
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="form-control-plaintext">
                        <strong>Fax Number : </strong>
                        {{ $profile->relAgent->present_fax_no }}
                    </p>
                </div>
            </div>
            <hr>
            <div class="">
                <p class="form-control-plaintext">
                    <strong>Permanent Address/Registered Office : </strong>
                    {{ $profile->relAgent->permanent_address }}
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="form-control-plaintext">
                        <strong>Lan Phone Number : </strong>
                        {{ $profile->relAgent->permanent_lan_phone_no }}
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="form-control-plaintext">
                        <strong>Mobile Phone No : </strong>
                        {{ $profile->relAgent->permanent_mobile_no }}
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="form-control-plaintext">
                        <strong>Fax Number : </strong>
                        {{ $profile->relAgent->permanent_fax_no }}
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <p class="text-center">Photograph (Image)</p>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="form-control-plaintext">
                                <strong>Authorized Person Name : </strong>
                                {{ $profile->relAgent->primary_person_name }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-control-plaintext">
                                <strong>Designation : </strong>
                                {{ $profile->relAgent->primary_person_designation }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-control-plaintext">
                                <strong>Mobile Phone No : </strong>
                                {{ $profile->relAgent->primary_person_mobile_no }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-control-plaintext">
                                <strong>E-mail Address : </strong>
                                {{ $profile->relAgent->primary_person_email }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <p class="text-center">Photograph (Image)</p>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="form-control-plaintext">
                                <strong>Authorized Person Name : </strong>
                                {{ $profile->relAgent->secondary_person_name }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-control-plaintext">
                                <strong>Designation : </strong>
                                {{ $profile->relAgent->secondary_person_designation }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-control-plaintext">
                                <strong>Mobile Phone No : </strong>
                                {{ $profile->relAgent->secondary_person_mobile_no }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="form-control-plaintext">
                                <strong>E-mail Address : </strong>
                                {{ $profile->relAgent->secondary_person_email }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="">
                <p><strong>Trade License (Image) : </strong></p>
            </div>
            <div class="">
                <p><strong>Tin/Tax Certificate (Image) : </strong></p>
            </div>
            <hr>
            <p class="form-control-plaintext">
                <strong>Whatsup Number : </strong>
                {{ $profile->relAgent->whatsup_no }}
            </p>
        </div>
    </div>
@endsection