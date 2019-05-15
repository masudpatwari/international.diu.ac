@extends('admin.layouts.layout')
@section('content')
<div class="mb-3 clearfix">
    <h5 class="d-inline mb-0">Print Documents</h5>
    {{ Form::open(['route' => 'documents.search', 'id' => 'src_by_reg', 'class' => 'float-right']) }}
    <div class="input-group">
        {{ Form::text('reg_no', NULL, ['class' => 'form-control', 'required', 'placeholder' => 'Registration no']) }}
        <div class="input-group-append">
            {{ Form::button('Search', ['type' => 'submit', 'class' => 'btn btn-sm btn-outline-secondary']) }}
        </div>
        @if ($errors->has('reg_no'))
            <span class="form-text text-danger">{{ $errors->first('reg_no') }}</span>
        @endif
    </div>
    {{ Form::close() }}
</div>
<table id="src_by_reg_table" class="table table-light table-sm table-bordered">
    <thead>
    <tr>
        <th>Department</th>
        <th>Registration No</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    </thead>
    @if(!empty($profiles))
        <tbody>
        @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->interested_subject }}</td>
                <td>{{ $profile->registration_no }}</td>
                <td>
                    <p>{{ (!empty($profile->relUser)) ? $profile->relUser->name : '' }}</p>
                    <p>{{ (!empty($profile->relUser)) ? $profile->relUser->email : '' }}</p>
                </td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('documents.show', $profile->id) }}">Download</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    @endif
</table>
@endsection