@extends('admin.layouts.layout')
@section('content')
    <div class="pt-4 pb-4 clearfix">
        <h4 class="d-inline">Create Student</h4>
    </div>
    {{ Form::open(['route' => 'student.store', 'class' => '']) }}
    <div class="diu-fg form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', NULL, ['class' => ['form-control', $errors->has('name') ? ' is-invalid' : ''], 'required'])  }}
        @if ($errors->has('name'))
            <span class="form-text text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="form-row">
        <div class="diu-fg form-group col-md-6">
            {{ Form::select('interested_subject', $courses, NULL, ['placeholder' => 'Interested Subject', 'class' => ['form-control', 'custom-select', $errors->has('interested_subject') ? ' is-invalid' : ''], 'required']) }}
            @if ($errors->has('interested_subject'))
                <span class="form-text text-danger">{{ $errors->first('interested_subject') }}</span>
            @endif
        </div>
        <div class="diu-fg form-group col-md-6">
            {{ Form::select('present_nationality', (!empty($country)) ? $country : [], NULL, ['placeholder' => 'Present Nationality', 'class' => ['form-control', 'custom-select', $errors->has('present_nationality') ? ' is-invalid' : ''], 'required']) }}
            @if ($errors->has('present_nationality'))
                <span class="form-text text-danger">{{ $errors->first('present_nationality') }}</span>
            @endif
        </div>
    </div>
    <div class="diu-fg form-group">
        {{ Form::label('email', 'E-mail Address') }}
        {{ Form::email('email', NULL, ['class' => ['form-control', $errors->has('email') ? ' is-invalid' : ''], 'required'])  }}
        @if ($errors->has('email'))
            <span class="form-text text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="diu-fg form-group">
        {{ Form::label('password', 'Password (min 6 char)') }}
        {{ Form::password('password', ['class' => ['form-control', $errors->has('password') ? ' is-invalid' : ''], 'required'])  }}
        @if ($errors->has('password'))
            <span class="form-text text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>
    {{ Form::button('Create', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
    {{ Form::close() }}
@endsection