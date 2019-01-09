@extends('admin.layouts.layout')
@section('content')
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
            <td>{{ sprintf('FA%04u', $agent->id) }}</td>
            <td>{{ $agent->relUser->name }}</td>
            <td class="text-capitalize">{{ $agent->type_of_agent }}</td>
            <td>{{ $agent->country_name }}</td>
            <td class="text-capitalize">{{ $agent->status }}</td>
            <td>
                <a href="{{ route('agent.edit', ['id' => $agent->user_id]) }}">Edit</a>
                ||
                <a href="{{ route('agent.show', ['id' => $agent->user_id]) }}">Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
@endsection