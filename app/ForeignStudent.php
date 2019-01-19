<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForeignStudent extends Model
{
    protected $table = 'foreign_student';

    public function relUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
