@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="card">
            <div class="card-header">
                <h5 class="d-inline mb-0">{{ $profile->name }} move to</h5>
            </div>
            @if(!empty($admission_batch))
                <table class="table table-sm table-bordered mb-0">
                    <tr>
                        <th>Department</th>
                        <th>Batch</th>
                        <th>Shift</th>
                        <th>Group</th>
                        <th>Campus</th>
                        <th class="text-right">Action</th>
                    </tr>
                    @foreach($admission_batch as $batch)
                        <tr>
                            <td>{{ $batch->department }}</td>
                            <td>{{ $batch->batch_name }}</td>
                            <td>{{ $batch->shift }}</td>
                            <td>{{ $batch->group }}</td>
                            <td>{{ $batch->campus }}</td>
                            <td class="text-right">
                                <a class="btn btn-sm btn-warning" href="{{ route('admitted.move_to_step_two', [$profile->id, $batch->id]) }}">Next Step</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
                <h4>No available admission on going batch</h4>
            @endif
        </div>
    </div>
@endsection