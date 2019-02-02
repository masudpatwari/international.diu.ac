@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="pt-4 pb-4 clearfix">
            <h4 class="d-inline">Agent {{ $profile->name }}</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            <strong>Agent ID : </strong>
                            {{ sprintf('FA%04u', $profile->id) }}
                        </p>
                        <p class="form-control-plaintext">
                            <strong>Name of Agent : </strong>
                            {{ $profile->name }}
                        </p>
                        <p class="form-control-plaintext text-capitalize">
                            <strong>Type of Agent : </strong>
                            {{ $profile->relAgent->type_of_agent }}
                        </p>
                        <p class="form-control-plaintext">
                            <strong>Country Name : </strong>
                            {{ $profile->relAgent->country_name }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="db-profile-photo">
                            <img src="{{ asset('uploads/'.$profile->profile_photo.'') }}">
                        </div>
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
                        <p class="text-center">
                            @if(!empty($profile->relAgent->primary_person_photo))
                                <img src="{{ asset('uploads/'.$profile->relAgent->primary_person_photo.'') }}">
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
                        <p class="text-center">
                            @if(!empty($profile->relAgent->secondary_person_photo))
                                <img src="{{ asset('uploads/'.$profile->relAgent->secondary_person_photo.'') }}">
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
                    <p class="clearfix">
                        <strong>Trade License (Image) : </strong>
                        @if(!empty($profile->relAgent->trade_license ))
                            <span class="float-right">
                            <a href="{{ asset('uploads/'.$profile->relAgent->trade_license.'') }}" target="_blank">View&nbsp;</a>
                            <a href="{{ asset('uploads/'.$profile->relAgent->trade_license.'') }}" download>&nbsp;Download</a>
                        </span>
                        @else
                            Empty
                        @endif
                    </p>
                    <hr>
                    <p class="clearfix">
                        <strong>Tin/Tax Certificate (Image) : </strong>
                        @if(!empty($profile->relAgent->tin_certificate ))
                            <span class="float-right">
                                <a href="{{ asset('uploads/'.$profile->relAgent->tin_certificate.'') }}" target="_blank">View&nbsp;</a>
                                <a href="{{ asset('uploads/'.$profile->relAgent->tin_certificate.'') }}" download>&nbsp;Download</a>
                            </span>
                        @else
                            Empty
                        @endif
                    </p>
                </div>
                <hr>
                <p class="form-control-plaintext">
                    <strong>Whatsup Number : </strong>
                    {{ $profile->relAgent->whatsup_no }}
                </p>
            </div>
        </div>
    </div>
@endsection