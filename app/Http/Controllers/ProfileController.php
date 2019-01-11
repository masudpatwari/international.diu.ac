<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Agent;
use App\Libraries\CountriesArray;
use App\Libraries\ApiCourseFee;


class ProfileController extends Controller
{
    public function show()
    {
         if (auth()->user()->role == 'student')
         {
             $data['profile'] = User::with('relStudent')->find(auth()->user()->id);
             return view('admin.profile.student.show', $data);
         }
         elseif (auth()->user()->role == 'agent')
         {
             $data['profile'] = User::with('relAgent')->find(auth()->user()->id);
             return view('admin.profile.agent.show', $data);
         }
         return view('admin.dashboard');
    }

    public function edit()
    {
        $data['country'] = CountriesArray::country()->pluck('name', 'name');
        $data['courses'] = ApiCourseFee::course_fee()->pluck('name', 'name');
        if (auth()->user()->role == 'student')
        {
            $data['profile'] = User::with('relStudent')->find(auth()->user()->id);
            return view('admin.profile.student.edit', $data);
        }
        elseif (auth()->user()->role == 'agent')
        {
            $data['profile'] = User::with('relAgent')->find(auth()->user()->id);
            return view('admin.profile.agent.show', $data);
        }
        return view('admin.dashboard');
    }


    public function agent_profile_update(Request $request)
    {
        $request->validate(
            [
                'type_of_agent' => 'required',
                'name_of_agent' => 'required|max:40',
                'country_name' => 'required|max:40',
                'email' => 'required|email',
                'pra_address' => 'required',
                'pra_mobile_no' => 'required',
                'pra_fax_no' => 'required',
                'per_address' => 'required',
                'per_lan_phone_no' => 'required',
                'per_mobile_no' => 'required',
                'per_fax_no' => 'required',
                'pri_person_name' => 'required|max:40',
                'pri_designation' => 'required|max:20',
                'pri_mobile_no' => 'required',
                'pri_email' => 'required|email',
                'sec_person_name' => 'required|max:40',
                'sec_designation' => 'required|max:20',
                'sec_mobile_no' => 'required',
                'sec_email' => 'required|email',
                'whatsup_no' => 'required',
            ]
        );

        $user = User::with('relAgent')->findOrFail(session('user.id'));
        $user->email = $request->email;
        $user->name = $request->name_of_agent;
        $user->relAgent->type_of_agent = $request->type_of_agent;
        $user->relAgent->country_name = $request->country_name;
        $user->relAgent->pra_address = $request->pra_address;
        $user->relAgent->pra_mobile_no = $request->pra_mobile_no;
        $user->relAgent->pra_fax_no = $request->pra_fax_no;
        $user->relAgent->per_address = $request->per_address;
        $user->relAgent->per_lan_phone_no = $request->per_lan_phone_no;
        $user->relAgent->per_mobile_no = $request->per_mobile_no;
        $user->relAgent->per_fax_no = $request->per_fax_no;
        $user->relAgent->pri_person_name = $request->pri_person_name;
        $user->relAgent->pri_photograph = NULL;
        $user->relAgent->pri_designation = $request->pri_designation;
        $user->relAgent->pri_mobile_no = $request->pri_mobile_no;
        $user->relAgent->pri_email = $request->pri_email;
        $user->relAgent->sec_person_name = $request->sec_person_name;
        $user->relAgent->sec_photograph = NULL;
        $user->relAgent->sec_designation = $request->sec_designation;
        $user->relAgent->sec_mobile_no = $request->sec_mobile_no;
        $user->relAgent->sec_email = $request->sec_email;
        $user->relAgent->trade_license = NULL;
        $user->relAgent->tin_certificate = NULL;
        $user->relAgent->whatsup_no = $request->whatsup_no;
        $user->relAgent->status = $request->status;

        if ( $user->save() && $user->relAgent->save() )
        {
            $request->session()->flash('message', ['success' => 'Profile Update successful!']);
        }
        else
        {
            $request->session()->flash('message', ['error' => 'Update Failed!']);
        }
        return redirect()->route('agent.profile.show');
    }

    public function student_profile_update(Request $request)
    {
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'permanent_address' => 'required',
                'permanent_telephone' => 'required',
                'permanent_mobile' => 'required',
                'present_address' => 'required',
                'present_telephone' => 'required',
                'present_mobile' => 'required',
                'address_in_bd' => 'required',
                'bd_telephone' => 'required',
                'bd_mobile' => 'required',
                'dob' => 'required|date',
                'sex' => 'required',
                'marital_status' => 'required',
                'place_of_birth' => 'required',
                'present_nationality' => 'required',
                'country_of_birth' => 'required',
                'interested_subject' => 'required',
                'passport_no' => 'required',
                'type_of_passport' => 'required',
                'date_of_issue' => 'required|date',
                'date_of_expire' => 'required|date',
                'date_of_last_visit_bd' => 'required|date',
                'last_visa_no' => 'required',
                'visa_category' => 'required',
                'visa_place_of_issue' => 'required',
                'visa_date_of_issue' => 'required|date',
                'visa_date_of_expire' => 'required|date',
                'date_of_arrival_bd' => 'required|date',
                'flight_no' => 'required',
                'father_name' => 'required',
                'father_nationality' => 'required',
                'father_mobile' => 'required',
                'mother_name' => 'required',
                'mother_nationality' => 'required',
                'mother_mobile' => 'required',
                'spouse_name' => 'required',
                'spouse_nationality' => 'required',
                'spouse_mobile' => 'required',
                'guardian_name' => 'required',
                'guardian_nationality' => 'required',
                'guardian_mobile' => 'required',
                'o_name_of_exam' => 'required',
                'o_group' => 'required',
                'o_roll_no' => 'required',
                'o_year_of_passing' => 'required|numerical',
                'o_letter_grade' => 'required',
                'o_cgpa' => 'required',
                'o_board' => 'required',
                'o_link_of_certificate' => 'required',
                'o_registration_no' => 'required',
            ]
        );

        $user = User::with('relStudent')->find(auth()->user()->id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->relStudent->permanent_address = $request->permanent_address;
        $user->relStudent->permanent_telephone = $request->permanent_telephone;
        $user->relStudent->permanent_mobile = $request->permanent_mobile;
        $user->relStudent->present_address = $request->present_address;
        $user->relStudent->present_telephone = $request->present_telephone;
        $user->relStudent->present_mobile = $request->present_mobile;
        $user->relStudent->address_in_bd = $request->address_in_bd;
        $user->relStudent->bd_telephone = $request->bd_telephone;
        $user->relStudent->bd_mobile = $request->bd_mobile;
        $user->relStudent->dob = $request->dob;
        $user->relStudent->sex = $request->sex;
        $user->relStudent->marital_status = $request->marital_status;
        $user->relStudent->place_of_birth = $request->place_of_birth;
        $user->relStudent->present_nationality = $request->present_nationality;
        $user->relStudent->country_of_birth = $request->country_of_birth;
        $user->relStudent->interested_subject = $request->interested_subject;
        $user->relStudent->passport_no = $request->passport_no;
        $user->relStudent->type_of_passport = $request->type_of_passport;
        $user->relStudent->date_of_issue = $request->date_of_issue;
        $user->relStudent->date_of_expire = $request->date_of_expire;
        $user->relStudent->date_of_last_visit_bd = $request->date_of_last_visit_bd;
        $user->relStudent->visa_category = $request->visa_category;
        $user->relStudent->visa_place_of_issue = $request->visa_place_of_issue;
        $user->relStudent->visa_date_of_issue = $request->visa_date_of_issue;
        $user->relStudent->visa_date_of_expire = $request->visa_date_of_expire;
        $user->relStudent->date_of_arrival_bd = $request->date_of_arrival_bd;
        $user->relStudent->flight_no = $request->flight_no;
        $user->relStudent->father_name = $request->father_name;
        $user->relStudent->father_nationality = $request->father_nationality;
        $user->relStudent->father_mobile = $request->father_mobile;
        $user->relStudent->mother_name = $request->mother_name;
        $user->relStudent->mother_nationality = $request->mother_nationality;
        $user->relStudent->mother_mobile = $request->mother_mobile;
        $user->relStudent->spouse_name = $request->spouse_name;
        $user->relStudent->spouse_nationality = $request->spouse_nationality;
        $user->relStudent->spouse_mobile = $request->spouse_mobile;
        $user->relStudent->guardian_name = $request->guardian_name;
        $user->relStudent->guardian_nationality = $request->guardian_nationality;
        $user->relStudent->guardian_mobile = $request->guardian_mobile;
        $user->relStudent->o_name_of_exam = $request->o_name_of_exam;
        $user->relStudent->o_group = $request->o_group;
        $user->relStudent->o_roll_no = $request->o_roll_no;
        $user->relStudent->o_year_of_passing = $request->o_year_of_passing;
        $user->relStudent->o_letter_grade = $request->o_letter_grade;
        $user->relStudent->o_cgpa = $request->o_cgpa;
        $user->relStudent->o_board = $request->o_board;
        $user->relStudent->o_link_of_certificate = $request->o_link_of_certificate;
        $user->relStudent->o_registration_no = $request->o_registration_no;


        if ( $user->save() && $user->relStudent->save() )
        {
            $request->session()->flash('message', ['success' => 'Profile Update successful!']);
        }
        else
        {
            $request->session()->flash('message', ['error' => 'Update Failed!']);
        }
        return redirect()->route('profile.show');
    }

}
