@extends('admin.layouts.layout')
@section('content')
<div class="mb-3 clearfix">
    <h5 class="d-inline mb-0">Agents</h5>
</div>
<table class="table table-light table-sm table-bordered">
    <thead>
        <tr>
            <th>Agent No</th>
            <th>Name</th>
            <th>Type of Agent</th>
            <th>Country</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    @if(!empty($agents))
    <tbody>
        @foreach($agents as $agent)
        <tr>
            <td>{{ sprintf('FA%04u', $agent->relUser->id) }}</td>
            <td>
                <p><strong>{{ $agent->relUser->name }}</strong></p>
                <p>{{ $agent->relUser->email }}</p>
            </td>
            <td class="text-capitalize">{{ $agent->type_of_agent }}</td>
            <td>{{ $agent->country_name }}</td>
            <td class="text-capitalize">{{ $agent->status }}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="{{ route('agent.show', ['id' => $agent->relUser->id]) }}">Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
@endsection