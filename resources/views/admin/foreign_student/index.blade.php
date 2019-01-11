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
    @if(!empty($students))
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>
                <p>{{ $student->relUser->first_name.' '.$student->relUser->last_name }}</p>
                <p>{{ $student->relUser->email }}</p>
            </td>
            <td class="text-capitalize">{{ $student->present_nationality }}</td>
            <td>{{ $student->interested_subject }}</td>
            <td>
                <a href="{{ route('students.show', $student->id) }}">Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
@endsection