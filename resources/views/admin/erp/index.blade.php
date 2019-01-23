@extends('admin.layouts.layout')
@section('content')

    {{ Form::open(['route' => 'erp.src', 'id' => 'src_by_reg']) }}
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
            <th>Batch</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Action</th>
        </tr>
        </thead>
        @if(!empty($profiles))
            <tbody>
            @foreach($profiles as $profile)
                <tr>
                    <td>{{ $profile->department->name }}</td>
                    <td>{{ $profile->batch->batch_name }}</td>
                    <td>
                        <p>{{ $profile->name }}</p>
                        <p>{{ $profile->email }}</p>
                    </td>
                    <td>{{ $profile->roll_no }}</td>
                    <td>
                        <a href="{{ route('erp.show', $profile->id) }}">Details</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        @endif
    </table>
@endsection