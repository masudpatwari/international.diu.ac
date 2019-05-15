@extends('admin.layouts.layout')
@section('content')
<div class="mb-3 clearfix">
    <h5 class="d-inline mb-0">Employees</h5>
    {{ Form::open(['route' => 'employee.search', 'id' => 'src_by_reg', 'class' => 'float-right']) }}
    <div class="input-group">
        {{ Form::text('name', NULL, ['class' => 'form-control', 'required', 'placeholder' => 'Employee Name']) }}
        <div class="input-group-append">
            {{ Form::button('Search', ['type' => 'submit', 'class' => 'btn btn-sm btn-outline-secondary']) }}
        </div>
        @if ($errors->has('name'))
            <span class="form-text text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
    {{ Form::close() }}
</div>
    
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

        @if(!empty($exists_employees))
            <tbody>
            @foreach($exists_employees as $employee)
                <tr>
                    <td>
                        <p>{{ $employee->name }}</p>
                        <p>{{ $employee->email }}</p>
                    </td>
                    <td>{{ $employee->relEmployee->designation }}</td>
                    <td>{{ $employee->relEmployee->mobile_no }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{ route('employee.show', $employee->relEmployee->emp_id) }}">Profile</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        @endif
    </table>
@endsection