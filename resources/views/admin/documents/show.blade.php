@extends('admin.layouts.layout')
@section('content')
    <div class="mx-auto" style="max-width: 768px">
        <div class="pt-4 pb-4 clearfix">
            <h4 class="d-inline">Profile of {{ $profile->relUser->name }}</h4>
            <p>Registration no : {{ $profile->registration_no }}</p>
        </div>
        <div class="card">
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
    </div>
@endsection