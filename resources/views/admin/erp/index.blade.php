@extends('admin.layouts.layout')
@section('content')
<div class="mb-3 clearfix">
    <h5 class="d-inline mb-0">Find Students</h5>
    {{ Form::open(['route' => 'erp.search', 'class' => 'float-right']) }}
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
                    @if(in_array($profile->id, $erp_students))
                        <p>Already exists</p>
                    @else
                        <a class="btn btn-sm btn-warning" href="{{ route('erp.edit', $profile->id) }}">Details</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    @endif
</table>
@endsection