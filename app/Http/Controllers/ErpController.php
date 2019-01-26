<?php

namespace App\Http\Controllers;

use App\ForeignStudent;
use App\Libraries\ApiReader;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ErpController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
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
        }
        return view('admin.erp.index', $data);
    }

    public function show($id)
    {
        Cache::forget('erp_student_profile');
        $expiresAt = now()->addMinutes(1000);
        $data['profile'] = ApiReader::student_by_id($id);
        Cache::put('erp_student_profile', $data['profile'], $expiresAt);
        return view('admin.erp.show', $data);
    }

    public function store($id)
    {
        if (Cache::has('erp_student_profile')) {
            $cache_values = Cache::get('erp_student_profile');
            $profile = collect($cache_values);


            $user = User::create([
                'name' => $profile['name'],
                'email' => (!empty($profile['email'])) ? $profile['email'] : 'mail'.time().'@example.com',
                'password' => (!empty($profile['password'])) ? bcrypt($profile['password']) : bcrypt('diu123'),
                'role' => 'student',
            ]);

            $student = ForeignStudent::create([
                'user_id' => $user->id,
                'permanent_address' => $profile['parmanent_add'],
                'permanent_telephone' => NULL,
                'permanent_mobile' => NULL,
                'present_address' => $profile['mailing_add'],
                'present_telephone' => NULL,
                'present_mobile' => NULL,
                'address_in_bd' => $profile['mailing_add'],
                'bd_telephone' => NULL,
                'bd_mobile' => $profile['phone_no'],
                'dob' => $profile['dob'],
                'sex' => $profile['gender'],
                'marital_status' => $profile['marital_status'],
                'blood_group' => $profile['blood_group'],
                'religion' => $profile['religion_id'],
                'place_of_birth' => NULL,
                'present_nationality' => (!empty($profile['birth_place'])) ? $profile['birth_place'] : "NA",
                'country_of_birth' => NULL,
                'interested_subject' => $profile['department']->name,
                'passport_no' => $profile['std_birth_or_nid_no'],
                'type_of_passport' => NULL,
                'date_of_issue' => NULL,
                'date_of_expire' => NULL,
                'date_of_last_visit_bd' => NULL,
                'last_visa_no' => NULL,
                'visa_category' => NULL,
                'visa_place_of_issue' => NULL,
                'visa_date_of_issue' => NULL,
                'visa_date_of_expire' => NULL,
                'date_of_arrival_bd' => NULL,
                'flight_no' => NULL,
                'father_name' => $profile['f_name'],
                'father_nationality' => NULL,
                'father_mobile' => $profile['f_cellno'],
                'mother_name' => $profile['m_name'],
                'mother_nationality' => NULL,
                'mother_mobile' => $profile['m_cellno'],
                'spouse_name' => NULL,
                'spouse_nationality' => NULL,
                'spouse_mobile' => NULL,
                'guardian_name' => $profile['g_name'],
                'guardian_nationality' => NULL,
                'guardian_mobile' => $profile['g_cellno'],
                'emergency_name' => $profile['e_name'],
                'emergency_nationality' => NULL,
                'emergency_mobile ' => $profile['e_cellno'],
                'o_name_of_exam' => $profile['e_exam_name1'],
                'o_group' => $profile['e_group1'],
                'o_roll_no' => $profile['e_roll_no_1'],
                'o_year_of_passing' => $profile['e_passing_year1'],
                'o_letter_grade' => $profile['e_ltr_grd_tmark1'],
                'o_cgpa' => $profile['e_div_cls_cgpa1'],
                'o_board' => $profile['e_board_university1'],
                'o_link_of_certificate' => NULL,
                't_name_of_exam' => $profile['e_exam_name2'],
                't_group' => $profile['e_group2'],
                't_roll_no' => $profile['e_roll_no_2'],
                't_year_of_passing' => $profile['e_passing_year2'],
                't_letter_grade' => $profile['e_ltr_grd_tmark2'],
                't_cgpa' => $profile['e_div_cls_cgpa2'],
                't_board' => $profile['e_board_university2'],
                't_link_of_certificate' => NULL,
                'th_name_of_exam' => $profile['e_exam_name3'],
                'th_group' => $profile['e_group3'],
                'th_roll_no' => $profile['e_roll_no_3'],
                'th_year_of_passing' => $profile['e_passing_year3'],
                'th_letter_grade' => $profile['e_ltr_grd_tmark3'],
                'th_cgpa' => $profile['e_div_cls_cgpa3'],
                'th_board' => $profile['e_board_university3'],
                'th_link_of_certificate' => NULL,
                'fo_name_of_exam' => $profile['e_exam_name4'],
                'fo_group' => $profile['e_group4'],
                'fo_roll_no' => $profile['e_roll_no_4'],
                'fo_year_of_passing' => $profile['e_passing_year4'],
                'fo_letter_grade' => $profile['e_ltr_grd_tmark4'],
                'fo_cgpa' => $profile['e_div_cls_cgpa4'],
                'fo_board' => $profile['e_board_university4'],
                'fo_link_of_certificate' => NULL,
                'registration_no' => $profile['reg_code'],
                'student_id' => $profile['id'],
                'department_name' => $profile['department']->name,
                'batch_name' => $profile['batch']->batch_name,
                'roll' => $profile['roll_no'],
                'referral_id' => auth()->user()->id,
            ]);

            if (!empty($user->id) && !empty($student->id))
            {
                session()->flash('message', ['success' => 'Create successful!']);
            }
            else
            {
                session()->flash('message', ['error' => 'Create Failed!']);
            }
        }
        return redirect()->route('erp.index');
    }

}
