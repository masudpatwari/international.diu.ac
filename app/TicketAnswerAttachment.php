<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketAnswerAttachment extends Model
{
    public function relTicketAnswer()
    {
        return $this->belongsTo('App\TIcketAnswer', 'answer_id', 'id');
    }
}
