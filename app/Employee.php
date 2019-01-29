<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = [
        'user_id', 'designation', 'mobile_no','emp_id',
    ];
}
