<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketAttachment extends Model
{
    public function relTicket()
    {
        return $this->belongsTo('App\Ticket', 'ticket_id', 'id');
    }
}
