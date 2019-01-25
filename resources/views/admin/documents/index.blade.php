@extends('admin.layouts.layout')
@section('content')
    {{ Form::open(['route' => 'documents.src', 'id' => 'src_by_reg']) }}
    <div class="input-group mb-3">
        {{ Form::text('reg_no', NULL, ['class' => 'form-control', 'required', 'placeholder' => 'Registration no']) }}
        <div class="input-group-append">
            {{ Form::button('Search', ['type' => 'submit', 'class' => 'btn btn-sm btn-outline-secondary']) }}
        </div>
        @if ($errors->has('reg_no'))
            <span class="form-text text-danger">{{ $errors->first('reg_no') }}</span>
        @endif
    </div>
    {{ Form::close() }}
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
                        <p>{{ $profile->relUser->name }}</p>
                        <p>{{ $profile->relUser->email }}</p>
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