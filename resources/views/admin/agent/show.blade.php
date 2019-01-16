@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="pt-4 pb-4 clearfix">
            <h4 class="d-inline">Agent {{ $profile->relUser->first_name ." ". $profile->relUser->last_name }}</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <p>
                    <strong>Agent ID : </strong>
                    {{ sprintf('FA%04u', $profile->relUser->id) }}
                </p>
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
                            {{ $profile->type_of_agent }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>Country Name : </strong>
                            {{ $profile->country_name }}
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
                        {{ $profile->present_address }}
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>Mobile Phone No : </strong>
                            {{ $profile->present_mobile_no }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="form-control-plaintext">
                            <strong>Fax Number : </strong>
                            {{ $profile->present_fax_no }}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="">
                    <p class="form-control-plaintext">
                        <strong>Permanent Address/Registered Office : </strong>
                        {{ $profile->permanent_address }}
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>Lan Phone Number : </strong>
                            {{ $profile->permanent_lan_phone_no }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>Mobile Phone No : </strong>
                            {{ $profile->permanent_mobile_no }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="form-control-plaintext">
                            <strong>Fax Number : </strong>
                            {{ $profile->permanent_fax_no }}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-2">
                        <p class="text-center">
                            @if(!empty($profile->primary_person_photo))
                                <img src="{{ asset('uploads/'.$profile->primary_person_photo.'') }}">
                            @else
                                Photograph (Image)
                            @endif
                        </p>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    <strong>Authorized Person Name : </strong>
                                    {{ $profile->primary_person_name }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    <strong>Designation : </strong>
                                    {{ $profile->primary_person_designation }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    <strong>Mobile Phone No : </strong>
                                    {{ $profile->primary_person_mobile_no }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    <strong>E-mail Address : </strong>
                                    {{ $profile->primary_person_email }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-2">
                        <p class="text-center">
                            @if(!empty($profile->secondary_person_photo))
                                <img src="{{ asset('uploads/'.$profile->secondary_person_photo.'') }}">
                            @else
                                Photograph (Image)
                            @endif
                        </p>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    <strong>Authorized Person Name : </strong>
                                    {{ $profile->secondary_person_name }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    <strong>Designation : </strong>
                                    {{ $profile->secondary_person_designation }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    <strong>Mobile Phone No : </strong>
                                    {{ $profile->secondary_person_mobile_no }}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">
                                    <strong>E-mail Address : </strong>
                                    {{ $profile->secondary_person_email }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="">
                    <p class="clearfix">
                        <strong>Trade License (Image) : </strong>
                        @if(!empty($profile->trade_license ))
                            <span class="float-right">
                            <a href="{{ asset('uploads/'.$profile->trade_license.'') }}" target="_blank">View&nbsp;</a>
                            <a href="{{ asset('uploads/'.$profile->trade_license.'') }}" download>&nbsp;Download</a>
                        </span>
                        @else
                            Empty
                        @endif
                    </p>
                    <hr>
                    <p class="clearfix">
                        <strong>Tin/Tax Certificate (Image) : </strong>
                        @if(!empty($profile->tin_certificate ))
                            <span class="float-right">
                                <a href="{{ asset('uploads/'.$profile->tin_certificate.'') }}" target="_blank">View&nbsp;</a>
                                <a href="{{ asset('uploads/'.$profile->tin_certificate.'') }}" download>&nbsp;Download</a>
                            </span>
                        @else
                            Empty
                        @endif
                    </p>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>Whatsup Number : </strong>
                    {{ $profile->whatsup_no }}
                </p>
            </div>
        </div>
    </div>
@endsection