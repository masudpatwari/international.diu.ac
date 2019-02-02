<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketAnswerAttachment extends Model
{
    protected $fillable = [
        'answer_id', 'original', 'filename','type',
    ];

    public function relTicketAnswer()
    {
        return $this->belongsTo('App\TIcketAnswer', 'answer_id', 'id');
    }
}
