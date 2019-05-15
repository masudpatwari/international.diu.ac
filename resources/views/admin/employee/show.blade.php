@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">{{ $employee['name'] }}</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <p class="form-control-plaintext">
                            <strong>Department : </strong>
                            {{ $employee['dept'] }}
                        </p>
                        <p class="form-control-plaintext">
                            <strong>Position : </strong>
                            {{ $employee['position'] }}
                        </p>
                        <p class="form-control-plaintext">
                            <strong>Email : </strong>
                            {{ $employee['email1'] }}
                        </p>
                        <p class="form-control-plaintext">
                            <strong>Mobile no : </strong>
                            {{ $employee['mno1'] }}
                        </p>
                    </div>
                    <div class="col-md-2">
                        <img src="{{ $employee['profilepic'] }}">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                @if(empty($exists))
                {{ Form::open(['route' => ['employee.store', $employee['id']]]) }}
                {{ Form::button('Save', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
                {{ Form::close() }}
                @else
                {{ Form::open(['route' => ['employee.delete', $employee['id']], 'method' => 'DELETE']) }}
                {{ Form::button('Delete Profile', ['type'=>'submit', 'class' => 'btn btn-sm btn-danger']) }}
                {{ Form::close() }}
                @endif
            </div>
        </div>
    </div>
@endsection