@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="pt-4 pb-4 clearfix">
            <h4 class="d-inline">Admission going on batch</h4>
        </div>
        <div class="card">
            @if(!empty($admission_batch))
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
            @else
                <h4>No available admission on going batch</h4>
            @endif
        </div>
    </div>
@endsection