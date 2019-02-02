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
    @if(!empty($profiles))
    <tbody>
        @foreach($profiles as $profile)
        <tr>
            <td>{{ sprintf('FA%04u', $profile->relUser->id) }}</td>
            <td>
                <p>{{ $profile->relUser->first_name.' '.$profile->relUser->last_name }}</p>
                <p>{{ $profile->relUser->email }}</p>
            </td>
            <td class="text-capitalize">{{ $profile->type_of_agent }}</td>
            <td>{{ $profile->country_name }}</td>
            <td class="text-capitalize">{{ $profile->status }}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="{{ route('agent.show', ['id' => $profile->relUser->id]) }}">Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
@endsection