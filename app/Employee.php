<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = [
        'user_id', 'position', 'department', 'mobile_no','emp_id','created_by', 'merit',
    ];

    public function relUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function relCreatedBy()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
