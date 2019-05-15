@extends('admin.layouts.layout')
@section('content')
<div class="db-ticket-room">
    @if(!empty($ticket))
        <div class="db-ticket-header">
            <div class="row">
                <div class="col-md-4">
                    <p><strong>{{ $ticket->name }}</strong></p>
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
                    <small><strong>{{ $ticket->name }}</strong></small>
                    <small class="float-right">{{ date('d M', strtotime($ticket->created_at)) }} at {{ date('h:i A', strtotime($ticket->created_at)) }}</small>
                </p>
                <p>{!! $ticket->body !!}</p>
            </div>
            @if(!empty($ticket->relTicketAnswer))
                @foreach($ticket->relTicketAnswer as $answer)
                    <div class="db-ticket-replay">
                        <p>
                            @if($answer->type == 'author')
                                <small>{{ $answer->relAnswerBy->name }} Dhaka International University</small>
                            @endif
                            @if($answer->type == 'client')
                                <small>{{ $answer->relAnswerBy->name }}</small>
                            @endif
                            <small class="float-right">{{ date('d M', strtotime($answer->created_at)) }} at {{ date('h:i A', strtotime($answer->created_at)) }}</small>
                        </p>
                        <p>{!! $answer->ticket_answer !!}</p>
                        @if($answer->relTicketAnswerAttachment->count() > 0)
                            <p><strong>Attachments!</strong></p>
                            <ul style="margin: 5px 0; padding: 0 10px">
                                @foreach($answer->relTicketAnswerAttachment as $attachment)
                                    <li style="display: block; list-style: none">
                                        <a href="{{ asset(env('UPLOAD_PATH').''.$attachment->filename) }}" download>{{ $attachment->original }}</a>
                                        <span style="float: right">
                                            <a href="{{ asset(env('UPLOAD_PATH').''.$attachment->filename) }}" download>Download</a>
                                            @if(in_array($attachment->type, ['jpg', 'jpeg', 'gif', 'png']))
                                                <a href="{{ asset(env('UPLOAD_PATH').''.$attachment->filename) }}">&nbsp;&nbsp;|&nbsp;&nbsp;View</a>
                                            @endif
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
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
            {{ Form::button('Send Message', ['type'=>'submit', 'class' => 'btn btn-sm btn-primary']) }}
            {{ Form::button('Attach File', ['type'=>'submit', 'class' => 'btn btn-sm btn-warning']) }}
            {{ Form::file('attachment[]', ['class' => ['d-none'], 'multiple'])  }}
            {{ Form::close() }}
        </div>
    @endif
</div>
<div class="db-tickets">
    @if(!empty($tickets))
        @foreach($tickets as $x)
            <a href="{{ route('ticket.show', $x->id) }}" class="{{ ($x->id == $ticket->id) ? 'active' : '' }} mb-1 p-2 d-block text-dark">
                <p><strong>{{ $x->name }}</strong></p>
                <p>{{ $x->email }}</p>
            </a>
        @endforeach
    @endif
</div>

<script type="text/javascript">
$(document).ready(function(){
    var messageBody = document.querySelector('.db-ticket-chat');
    messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
})
</script>
@endsection