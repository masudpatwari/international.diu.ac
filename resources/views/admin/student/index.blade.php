@extends('admin.layouts.layout')
@section('content')
<div class="pt-4 pb-4 clearfix">
    <h4 class="d-inline">Students</h4>
    <a class="btn btn-sm btn-warning float-right" href="{{ route('student.create') }}">Create Student</a>
</div>
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
                <p>{{ $profile->relUser->name }}</p>
                <p>{{ $profile->relUser->email }}</p>
            </td>
            <td class="text-capitalize">{{ $profile->present_nationality }}</td>
            <td>{{ $profile->interested_subject }}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="{{ route('student.show', $profile->relUser->id) }}">Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
@endsection