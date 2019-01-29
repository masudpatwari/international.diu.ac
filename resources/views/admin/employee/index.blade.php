@extends('admin.layouts.layout')
@section('content')
    {{ Form::open(['route' => 'employee.src', 'id' => 'src_by_reg']) }}
    <div class="input-group mb-3">
        {{ Form::text('name', NULL, ['class' => 'form-control', 'required', 'placeholder' => 'Employee Name']) }}
        <div class="input-group-append">
            {{ Form::button('Search', ['type' => 'submit', 'class' => 'btn btn-sm btn-outline-secondary']) }}
        </div>
        @if ($errors->has('name'))
            <span class="form-text text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
    {{ Form::close() }}
    <table id="src_by_reg_table" class="table table-light table-sm table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Department / Position</th>
            <th>Mobile no</th>
            <th>Action</th>
        </tr>
        </thead>
        @if(!empty($employees))
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>
                        <p>{{ $employee->name }}</p>
                        <p>{{ $employee->email1 }}</p>
                    </td>
                    <td>{{ $employee->dept }} [ {{ $employee->position }} ]</td>
                    <td>{{ $employee->mno1 }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{ route('employee.show', $employee->id) }}">Profile</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        @endif
    </table>
@endsection