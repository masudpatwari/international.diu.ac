@extends('admin.layouts.layout')
@section('content')

{{ Form::open(['route' => 'students.src_by_reg']) }}
<div class="input-group mb-3">
    {{ Form::text('reg_no', NULL, ['class' => 'form-control', 'required', 'placeholder' => 'Registration no']) }}
    <div class="input-group-append">
        {{ Form::button('Search', ['type'=>'submit', 'class' => 'btn btn-sm btn-outline-secondary']) }}
    </div>
    @if ($errors->has('reg_no'))
        <span class="form-text text-danger">{{ $errors->first('reg_no') }}</span>
    @endif
</div>
{{ Form::close() }}
<table class="table table-light table-sm table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Present Nationality</th>
            <th>Interested Subject</th>
            <th>Action</th>
        </tr>
    </thead>
    @if(!empty($profiles))
    <tbody>
        @foreach($profiles as $profile)
        <tr>
            <td>
                <p>{{ $profile->relUser->first_name.' '.$profile->relUser->last_name }}</p>
                <p>{{ $profile->relUser->email }}</p>
            </td>
            <td class="text-capitalize">{{ $profile->present_nationality }}</td>
            <td>{{ $profile->interested_subject }}</td>
            <td>
                <a href="{{ route('students.show', $profile->relUser->id) }}">Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
@endsection