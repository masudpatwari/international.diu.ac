@extends('admin.layouts.layout')
@section('content')
<table class="table table-light table-sm table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Present Nationality</th>
            <th>Interested Subject</th>
            <th>Action</th>
        </tr>
    </thead>
    @if(!empty($profiles))
    <tbody>
        @foreach($profiles as $profile)
        <tr>
            <td>
                <p>{{ $profile->relUser->first_name.' '.$profile->relUser->last_name }}</p>
                <p>{{ $profile->relUser->email }}</p>
            </td>
            <td class="text-capitalize">{{ $profile->present_nationality }}</td>
            <td>{{ $profile->interested_subject }}</td>
            <td>
                <a href="{{ route('students.show', $profile->relUser->id) }}">Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
@endsection