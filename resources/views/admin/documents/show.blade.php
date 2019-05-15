@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="card">
            <div class="card-header">
                <h5 class="d-inline">Profile of {{ $profile->relUser->name }}</h5>
                <p>Registration no : {{ $profile->registration_no }}</p>
            </div>
            @if(!empty($documents))
                <ul class="list-group list-group-flush">
                    @foreach($documents as $key => $document)
                        <li class="list-group-item">
                            <strong>{{ $document['name'] }}</strong>
                            <a href="{{ route('documents.pdf', $document['filename']) }}" class="float-right">Download</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <a href="{{ route('documents.index') }}" class="btn btn-danger btn-sm mt-3 mb-5">Back</a>
    </div>
@endsection