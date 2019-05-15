<?php

namespace App\Http\Controllers;

use App\ForeignStudent;
use App\Libraries\ApiReader;
use App\User;
use Illuminate\Http\Request;
use App\Libraries\CountriesArray;
use Illuminate\Support\Facades\Cache;
use App\CourseFee;

class ErpController extends Controller
{
    public function index(Request $request)
    {
        if ($request->input('reg_no')) {
            $request->validate(
                [
                    'reg_no' => 'required',
                ],
                [
                    'reg_no.required' => 'Registration no is required',
                ]
            );
            $data['profiles'] = ApiReader::src_by_reg($request->reg_no);
            $data['erp_students'] = ForeignStudent::pluck('student_id')->toArray();
            return view('admin.erp.index', $data);
        }
        return view('admin.erp.index');
    }

    public function edit($id)
    {
        Cache::forget('erp_student_profile');
        $expiresAt = now()->addMinutes(1000);
        $data['profile'] = ApiReader::student_by_id($id);
        Cache::put('erp_student_profile', $data['profile'], $expiresAt);
        $data['blood_group'] = bloodGroup()->pluck('name', 'name');
        $data['religion'] = ApiReader::religion()->pluck('name', 'id');
        $data['country'] = CountriesArray::country()->pluck('name', 'name');
        $data['courses'] = CourseFee::all()->pluck('name', 'name');
        return view('admin.erp.edit', $data);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'present_nationality' => 'required',
                'interested_subject' => 'required',
            ]
        );

        $profile = "";
        if (Cache::has('erp_student_profile')) {
            $cache_values = Cache::get('erp_student_profile');
            $profile = collect($cache_values);
        }


        $filename = "";
        if($request->hasFile('profile_photo'))
        {
            $image = $request->file('profile_photo');
            $filename = 'profile_photo_'.sprintf("%05d", $profile['id']) . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/', $filename);
        }


        $user = User::create([
            'name' => $request->name,
            'email' => (!empty($profile['email'])) ? $profile['email'] : 'mail'.time().'@example.com',
            'email_verified_at' => date('Y-m-d h:m:s'),
            'password' => (!empty($profile['password'])) ? bcrypt($profile['password']) : bcrypt('diu123'),
            'role' => 'student',
            'profile_photo' => $filename,
        ]);

        $student = ForeignStudent::create([
            'user_id' => $user->id,
            'permanent_address' => $request->permanent_address,
            'permanent_telephone' => $request->permanent_telephone,
            'permanent_mobile' => $request->permanent_mobile,
            'present_address' => $request->present_address,
            'present_telephone' => $request->present_telephone,
            'present_mobile' => $request->present_mobile,
            'address_in_bd' => $request->address_in_bd,
            'bd_telephone' => $request->bd_telephone,
            'bd_mobile' => $request->bd_mobile,
            'dob' => d2db($request->dob),
            'sex' => $request->sex,
            'marital_status' => $request->marital_status,
            'blood_group' => $request->blood_group,
            'religion' => $request->religion,
            'place_of_birth' => $request->place_of_birth,
            'present_nationality' => $request->present_nationality,
            'country_of_birth' => $request->country_of_birth,
            'interested_subject' => $request->interested_subject,
            'passport_no' => $request->passport_no,
            'type_of_passport' => $request->type_of_passport,
            'date_of_issue' => d2db($request->date_of_issue),
            'date_of_expire' => d2db($request->date_of_expire),
            'date_of_last_visit_bd' => d2db($request->date_of_last_visit_bd),
            'last_visa_no' => $request->last_visa_no,
            'visa_category' => $request->visa_category,
            'visa_place_of_issue' => $request->visa_place_of_issue,
            'visa_date_of_issue' => d2db($request->visa_date_of_issue),
            'visa_date_of_expire' => d2db($request->visa_date_of_expire),
            'date_of_arrival_bd' => d2db($request->date_of_arrival_bd),
            'flight_no' => $request->flight_no,
            'father_name' => $request->father_name,
            'father_nationality' => $request->father_nationality,
            'father_mobile' => $request->father_mobile,
            'mother_name' => $request->mother_name,
            'mother_nationality' => $request->mother_nationality,
            'mother_mobile' => $request->mother_mobile,
            'spouse_name' => $request->spouse_name,
            'spouse_nationality' => $request->spouse_nationality,
            'spouse_mobile' => $request->spouse_mobile,
            'guardian_name' => $request->guardian_name,
            'guardian_nationality' => $request->guardian_nationality,
            'guardian_mobile' => $request->guardian_mobile,
            'emergency_name' => $request->emergency_name,
            'emergency_nationality' => $request->emergency_nationality,
            'emergency_mobile ' => $request->emergency_mobile,
            'o_name_of_exam' => $request->o_name_of_exam,
            'o_group' => $request->o_group,
            'o_roll_no' => $request->o_roll_no,
            'o_year_of_passing' => $request->o_year_of_passing,
            'o_letter_grade' => $request->o_letter_grade,
            'o_cgpa' => $request->o_cgpa,
            'o_board' => $request->o_board,
            'o_link_of_certificate' => $request->o_link_of_certificate,
            't_name_of_exam' => $request->t_name_of_exam,
            't_group' => $request->t_group,
            't_roll_no' => $request->t_roll_no,
            't_year_of_passing' => $request->t_year_of_passing,
            't_letter_grade' => $request->t_letter_grade,
            't_cgpa' => $request->t_cgpa,
            't_board' => $request->t_board,
            't_link_of_certificate' => $request->t_link_of_certificate,
            'th_name_of_exam' => $request->th_name_of_exam,
            'th_group' => $request->th_group,
            'th_roll_no' => $request->th_roll_no,
            'th_year_of_passing' => $request->th_year_of_passing,
            'th_letter_grade' => $request->th_letter_grade,
            'th_cgpa' => $request->th_cgpa,
            'th_board' => $request->th_board,
            'th_link_of_certificate' => $request->th_link_of_certificate,
            'fo_name_of_exam' => $request->fo_name_of_exam,
            'fo_group' => $request->fo_group,
            'fo_roll_no' => $request->fo_roll_no,
            'fo_year_of_passing' => $request->fo_year_of_passing,
            'fo_letter_grade' => $request->fo_letter_grade,
            'fo_cgpa' => $request->fo_cgpa,
            'fo_board' => $request->fo_board,
            'fo_link_of_certificate' => $request->fo_link_of_certificate,
            'registration_no' => $profile['reg_code'],
            'referral_id' => auth()->user()->id,
            'student_id' => $profile['id'],
            'department_name' => $profile['department']->name,
            'batch_name' => $profile['batch']->batch_name,
            'roll' => $profile['roll_no'],
        ]);

        if (!empty($user->id) && !empty($student->id))
        {
            session()->flash('message', ['success' => 'Create successful!']);
        }
        else
        {
            session()->flash('message', ['error' => 'Create Failed!']);
        }
        return redirect()->route('erp.index');
    }

}
