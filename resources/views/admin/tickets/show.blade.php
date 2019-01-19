@extends('admin.layouts.layout')
@section('content')
    @if(!empty($ticket))
        <div class="card mb-2 border-0">
            <div class="card-header">
                <h5 class="mb-0"><p>{{ $ticket->first_name." ".$ticket->last_name }}</p></h5>
                <p>{{ $ticket->email }}</p>
            </div>
            <div class="card-body border-bottom">
                <p>{!! $ticket->body !!}</p>
            </div>
            @if(!empty($ticket->relTicketAnswer))
                @foreach($ticket->relTicketAnswer as $answer)
                    <div class="card-body border-bottom">
                        <p>{!! $answer->ticket_answer !!}</p>
                    </div>
                @endforeach
            @endif
        </div>
        {{ Form::open(['route' => ['ticket.answer', $ticket->id], 'class' => '']) }}
        <div class="diu-fg form-group">
            {{ Form::textarea('body', NULL, ['class' => 'form-control', 'required'])  }}
            @if ($errors->has('body'))
                <span class="form-text text-danger">{{ $errors->first('body') }}</span>
            @endif
        </div>
        {{ Form::button('<i class="ti-arrow-right"></i> Submit', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
        {{ Form::close() }}
    @endif
@endsection