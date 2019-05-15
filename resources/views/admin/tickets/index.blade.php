@extends('admin.layouts.layout')
@section('content')
<div class="mb-3 clearfix">
    <h5 class="d-inline mb-0">Supports Tickets</h5>
</div>
@if(!empty($tickets))
    <table class="table table-sm">
    @foreach($tickets as $ticket)
        <tr>
            <td>
                <p><strong>{{ $ticket->name }}</strong></p>
                <p>{{ $ticket['email'] }}</p>
            </td>
            <td>
                <p class="text-truncate">{{ $ticket->body }}</p>
            </td>
            <td>
                <p class="text-capitalize">{{ setLevel($ticket->status) }}</p>
            </td>
            <td>
                <a href="{{ route('ticket.show', $ticket->id) }}" class="btn btn-primary btn-sm">View</a>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $tickets->links() }}
@endif
@endsection