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
            return view('admin.profile.agent.edit', $data);
        }
        return view('admin.dashboard');
    }


    public function agent_profile_update(Request $request)
    {
        $request->validate(
            [
                'type_of_agent' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'country_name' => 'required',
                'present_address' => 'required',
                'present_mobile_no' => 'required',
                'present_fax_no' => 'required',
                'permanent_address' => 'required',
                'permanent_lan_phone_no' => 'required',
                'permanent_mobile_no' => 'required',
                'permanent_fax_no' => 'required',
                'primary_person_name' => 'required',
                'primary_person_designation' => 'required',
                'primary_person_mobile_no' => 'required',
                'primary_person_email' => 'required|email',
                'secondary_person_name' => 'required',
                'secondary_person_designation' => 'required',
                'secondary_person_mobile_no' => 'required',
                'secondary_person_email' => 'required|email',
                'whatsup_no' => 'required',
            ]
        );

        $agent = User::with('relAgent')->findOrFail(auth()->user()->id);
        $agent->first_name = $request->first_name;
        $agent->last_name = $request->last_name;
        $agent->relAgent->type_of_agent = $request->type_of_agent;
        $agent->relAgent->country_name = $request->country_name;
        $agent->relAgent->present_address = $request->present_address;
        $agent->relAgent->present_mobile_no = $request->present_mobile_no;
        $agent->relAgent->present_fax_no = $request->present_fax_no;
        $agent->relAgent->permanent_address = $request->permanent_address;
        $agent->relAgent->permanent_lan_phone_no = $request->permanent_lan_phone_no;
        $agent->relAgent->permanent_mobile_no = $request->permanent_mobile_no;
        $agent->relAgent->permanent_fax_no = $request->permanent_fax_no;
        $agent->relAgent->primary_person_name = $request->primary_person_name;
        if($request->hasFile('primary_person_photo'))
        {
            $image = $request->file('primary_person_photo');
            $filename = 'primary_person_'.sprintf("%05d", $agent->id) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/', $filename);
            $agent->relAgent->primary_person_photo = $filename;
        }
        $agent->relAgent->primary_person_designation = $request->primary_person_designation;
        $agent->relAgent->primary_person_mobile_no = $request->primary_person_mobile_no;
        $agent->relAgent->primary_person_email = $request->primary_person_email;
        $agent->relAgent->secondary_person_name = $request->secondary_person_name;
        if($request->hasFile('secondary_person_photo'))
        {
            $image = $request->file('secondary_person_photo');
            $filename = 'secondary_person_'.sprintf("%05d", $agent->id) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/', $filename);
            $agent->relAgent->secondary_person_photo = $filename;
        }
        $agent->relAgent->secondary_person_designation = $request->secondary_person_designation;
        $agent->relAgent->secondary_person_mobile_no = $request->secondary_person_mobile_no;
        $agent->relAgent->secondary_person_email = $request->secondary_person_email;
        if($request->hasFile('trade_license'))
        {
            $image = $request->file('trade_license');
            $filename = 'trade_license_'.sprintf("%05d", $agent->id) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/', $filename);
            $agent->relAgent->trade_license = $filename;
        }
        if($request->hasFile('tin_certificate'))
        {
            $image = $request->file('tin_certificate');
            $filename = 'tin_certificate_'.sprintf("%05d", $agent->id) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/', $filename);
            $agent->relAgent->tin_certificate = $filename;
        }
        $agent->relAgent->whatsup_no = $request->whatsup_no;
        if($request->hasFile('profile_photo'))
        {
            $image = $request->file('profile_photo');
            $filename = 'profile_photo_'.sprintf("%05d", $agent->id) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/', $filename);
            $agent->profile_photo = $filename;
        }

        if ( $agent->save() && $agent->relAgent->save() )
        {
            $request->session()->flash('message', ['success' => 'Profile Update successful!']);
        }
        else
        {
            $request->session()->flash('message', ['error' => 'Update Failed!']);
        }
        return redirect()->route('profile.show');
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
                'o_year_of_passing' => 'required|numeric',
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
        if($request->hasFile('profile_photo'))
        {
            $image = $request->file('profile_photo');
            $filename = 'profile_photo_'.sprintf("%05d", $user->id) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/', $filename);
            $user->profile_photo = $filename;
        }


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
