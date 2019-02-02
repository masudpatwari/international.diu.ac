<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'profile_photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function relAgent()
    {
        return $this->hasOne('App\Agent', 'user_id', 'id');
    }

    public function relStudent()
    {
        return $this->hasOne('App\ForeignStudent', 'user_id', 'id');
    }

    public function relEmployee()
    {
        return $this->hasOne('App\Employee', 'user_id', 'id');
    }

    public function relEmployeeCreatedBy()
    {
        return $this->hasMany('App\Employee', 'created_by', 'id');
    }

    public function relStudentReferralId()
    {
        return $this->hasMany('App\ForeignStudent', 'referral_id', 'id');
    }

    public function relTicketAnswerBy()
    {
        return $this->hasMany('App\TicketAnswer', 'answer_by', 'id');
    }
}
