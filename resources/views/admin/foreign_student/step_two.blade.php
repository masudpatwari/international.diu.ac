@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="pt-4 pb-4 clearfix">
            <h4 class="d-inline">{{ $profile['first_name'] ." ". $profile['last_name'] }} move to</h4>
        </div>
        <div class="card">
            @if(!empty($batch))
                <table class="table table-sm table-bordered mb-0">
                    <tr>
                        <th>Department</th>
                        <th>Batch</th>
                        <th>Shift</th>
                        <th>Group</th>
                        <th>Campus</th>
                    </tr>
                    <tr>
                        <td>{{ $batch->department }}</td>
                        <td>{{ $batch->batch_name }}</td>
                        <td>{{ $batch->shift }}</td>
                        <td>{{ $batch->group }}</td>
                        <td>{{ $batch->campus }}</td>
                    </tr>
                </table>
                <div class="card-body">
                {{ Form::open(['id' => 'move_to_confirm_form']) }}
                <div class="form-group">
                    {{ Form::label('adm_frm_no', 'Admission Form No') }}
                    {{ Form::text('adm_frm_no', NULL, ['class' => 'form-control', 'required'])  }}
                    @if ($errors->has('adm_frm_no'))
                        <span class="form-text text-danger">{{ $errors->first('adm_frm_no') }}</span>
                    @endif
                </div>
                {{ Form::button('<i class="ti-arrow-right"></i> Confirm', ['class' => 'btn btn-sm btn-success']) }}
                {{ Form::close() }}
                </div>
            @else
                <h4>No available admission on going batch</h4>
            @endif
        </div>
    </div>
    @if(!empty($admission))
        <script type="text/javascript">
            var admission = {!! json_encode($admission) !!}
        </script>
    @endif
@endsection