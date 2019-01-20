<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function relTicketAnswer()
    {
        return $this->hasMany('App\TicketAnswer', 'ticket_id', 'id');
    }

    public function relTicketAttachment()
    {
        return $this->hasMany('App\TicketAttachment', 'ticket_id', 'id');
    }
}
