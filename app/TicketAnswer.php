<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketAnswer extends Model
{
    public function relTicketAnswerAttachment()
    {
        return $this->hasMany('App\TicketAnswerAttachment', 'answer_id', 'id');

    }

    public function relTicket()
    {
        return $this->belongsTo('App\Ticket', 'ticket_id', 'id');
    }

    public function relAnswerBy()
    {
        return $this->belongsTo('App\User', 'answer_by', 'id');
    }
}
