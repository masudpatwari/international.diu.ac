@extends('admin.layouts.layout')
@section('content')
    @if(!empty($tickets))
        @foreach($tickets as $ticket)
        <a href="{{ route('ticket.show', $ticket->id) }}" class="bg-light mb-1 p-2 d-block text-dark">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="mb-0"><p>{{ $ticket->first_name." ".$ticket->last_name }}</p></h5>
                    <p>{{ $ticket['email'] }}</p>
                </div>
                <div class="col-md-6">
                    <p class="text-truncate">{{ $ticket->body }}</p>
                </div>
                <div class="col-md-2">
                    <p class="text-capitalize">{{ setLevel($ticket->status) }}</p>
                </div>
            </div>
        </a>
        @endforeach
        {{ $tickets->links() }}
    @endif
@endsection