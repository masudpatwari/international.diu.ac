<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForeignStudent extends Model
{
    protected $fillable = [
        "user_id","first_name","last_name","permanent_address","permanent_telephone","permanent_mobile","present_address","present_telephone","present_mobile","address_in_bd","bd_telephone","bd_mobile","dob","sex","marital_status","blood_group","religion","place_of_birth","present_nationality","country_of_birth","interested_subject","passport_no","type_of_passport","date_of_issue","date_of_expire","date_of_last_visit_bd","last_visa_no","visa_category","visa_place_of_issue","visa_date_of_issue","visa_date_of_expire","date_of_arrival_bd","flight_no","father_name","father_nationality","father_mobile","mother_name","mother_nationality","mother_mobile","spouse_name","spouse_nationality","spouse_mobile","guardian_name","guardian_nationality","guardian_mobile","emergency_name","emergency_nationality",
        "o_name_of_exam","o_group","o_roll_no","o_year_of_passing","o_letter_grade","o_cgpa","o_board","o_link_of_certificate",
        "t_name_of_exam","t_group","t_roll_no","t_year_of_passing","t_letter_grade","t_cgpa","t_board","t_link_of_certificate",
        "th_name_of_exam","th_group","th_roll_no","th_year_of_passing","th_letter_grade","th_cgpa","th_board","th_link_of_certificate",
        "fo_name_of_exam","fo_group","fo_roll_no","fo_year_of_passing","fo_letter_grade","fo_cgpa","fo_board","fo_link_of_certificate",
        "registration_no","student_id"
    ];

    public function relUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
