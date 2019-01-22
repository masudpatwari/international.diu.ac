@extends('admin.layouts.layout')
@section('content')
    <div class="db-ticket-room">
        @if(!empty($ticket))
            <div class="db-ticket-header">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="mb-0"><p>{{ $ticket->first_name." ".$ticket->last_name }}</p></h5>
                        <p>{{ $ticket->email }}</p>
                    </div>
                    <div class="col-md-8">
                        <p>Interested Subject : {{ $ticket->interested_subject }}</p>
                        <p>From (Country) : {{ $ticket->present_nationality }}</p>
                    </div>
                </div>
            </div>
            <div class="db-ticket-chat">
                <div class="db-ticket-message">
                    <p>
                        <small>{{ $ticket->first_name." ".$ticket->last_name }}</small>
                        <small class="float-right">{{ date('d M', strtotime($ticket->created_at)) }} at {{ date('h:i A', strtotime($ticket->created_at)) }}</small>
                    </p>
                    <p>{!! $ticket->body !!}</p>
                </div>
                @if(!empty($ticket->relTicketAnswer))
                    @foreach($ticket->relTicketAnswer as $answer)
                        <div class="db-ticket-replay">
                            <p>
                                <small>{{ ($answer->type == 'author') ? 'Dhaka International University' : $ticket->first_name." ".$ticket->last_name }}</small>
                                <small class="float-right">{{ date('d M', strtotime($answer->created_at)) }} at {{ date('h:i A', strtotime($answer->created_at)) }}</small>
                            </p>
                            <p>{!! $answer->ticket_answer !!}</p>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="db-ticket-form">
                {{ Form::open(['route' => ['ticket.answer', $ticket->id], 'files' => true]) }}
                <div class="diu-fg form-group">
                    {{ Form::textarea('body', NULL, ['class' => 'form-control', 'required', 'rows' => 2])  }}
                    @if ($errors->has('body'))
                        <span class="form-text text-danger">{{ $errors->first('body') }}</span>
                    @endif
                </div>
                {{ Form::button('<i class="material-icons">send</i>', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
                {!! Html::decode(Form::label('attachment[]', '<i class="material-icons">attach_file</i>', ['class' => 'mb-0 btn btn-sm btn-warning'])) !!}
                {{ Form::file('attachment[]', ['class' => ['d-none'], 'multiple'])  }}
                {{ Form::close() }}
            </div>
        @endif
    </div>
    <div class="db-tickets">
        @if(!empty($tickets))
            @foreach($tickets as $x)
                <a href="{{ route('ticket.show', $x->id) }}" class="{{ ($x->id == $ticket->id) ? 'active' : '' }} mb-1 p-2 d-block text-dark">
                    <h5 class="mb-0"><p>{{ $x->first_name." ".$x->last_name }}</p></h5>
                    <p>{{ $x->email }}</p>
                </a>
            @endforeach
        @endif
    </div>
@endsection