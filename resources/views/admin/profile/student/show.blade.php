@extends('admin.layouts.layout')
@section('content')
    <div class="card mx-auto" style="max-width: 768px">
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">First Name</dt>
                <dd class="col-sm-3">{{ $profile->first_name }}</dd>
                <dt class="col-sm-3">Last Name</dt>
                <dd class="col-sm-3">{{ $profile->last_name }}</dd>
                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">{{ $profile->email }}</dd>
                <dt class="col-sm-3">Interested Subject</dt>
                <dd class="col-sm-3">{{ $profile->relStudent->interested_subject }}</dd>
                <dt class="col-sm-3">Present Nationality</dt>
                <dd class="col-sm-3">{{ $profile->relStudent->present_nationality }}</dd>

                <dt class="col-sm-3">Present address/Office Address</dt>
                <dd class="col-sm-9">
                    <dl class="row">
                        <dd class="col-sm-12"></dd>
                        <dt class="col-sm-4">Mobile Phone No</dt>
                        <dd class="col-sm-8"></dd>
                        <dt class="col-sm-4">Fax Number</dt>
                        <dd class="col-sm-8"></dd>
                    </dl>
                </dd>
            </dl>
            {{--{{ link_to_route('agent.profile.edit', 'Edit', NULL, ['class' => 'btn btn-sm btn-primary']) }}--}}
        </div>
    </div>
@endsection