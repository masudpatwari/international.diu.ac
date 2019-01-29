@extends('admin.layouts.layout')
@section('content')
    @if(!empty($admission_batch))
<div class="mx-auto">
    <div class="pt-4 pb-4 clearfix">
        <h4 class="d-inline">Admission going on batch</h4>
    </div>
    <table class="table table-sm table-bordered mb-0">
        <tr>
            <th>Department</th>
            <th>Batch</th>
            <th>Shift</th>
            <th>Group</th>
            <th>Campus</th>
        </tr>
        @foreach($admission_batch as $batch)
            <tr>
                <td>{{ $batch->department }}</td>
                <td>{{ $batch->batch_name }}</td>
                <td>{{ $batch->shift }}</td>
                <td>{{ $batch->group }}</td>
                <td>{{ $batch->campus }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endif
@endsection