@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="card">
            <div class="card-header">
                <h5 class="d-inline mb-0">{{ $profile['name'] }} move to</h5>
            </div>
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
                    <form action="javaScript:;" method="POST" id="move_to_confirm_form">
                    <div class="form-group">
                        {{ Form::label('adm_frm_no', 'Admission Form No') }}
                        {{ Form::text('adm_frm_no', NULL, ['class' => 'form-control', 'required'])  }}
                        @if ($errors->has('adm_frm_no'))
                            <span class="form-text text-danger">{{ $errors->first('adm_frm_no') }}</span>
                        @endif
                    </div>
                    {{ Form::button('Confirm', ['type'=>'submit', 'class' => 'btn btn-sm btn-success']) }}
                    </form>
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

<script type="text/javascript">
$(document).ready(function(){

    $("#move_to_confirm_form").submit(function(event){
        var adm_frm_no = $('#move_to_confirm_form [name="adm_frm_no"]').val();
        $.ajax({
            type: "POST",
            url: rms_url + '/admission',
            data: {'adm_frm_no': adm_frm_no, 'admission_frm': admission},
            dataType: 'json',
            success: function(response)
            {
                console.log(response);
            }
        });
    })
})
</script>
@endsection