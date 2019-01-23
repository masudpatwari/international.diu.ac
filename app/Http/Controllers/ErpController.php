<?php

namespace App\Http\Controllers;

use App\ForeignStudent;
use App\Libraries\ApiReader;
use App\User;
use Illuminate\Http\Request;

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
        }
        return view('admin.erp.index', $data);
    }

    public function show($id)
    {
        $data['profile'] = ApiReader::student_by_id($id);
        return view('admin.erp.show', $data);
    }

    public function store($id)
    {
        $profile = ApiReader::student_by_id($id);
        $user = User::create([
            'first_name' => $profile['name'],
            'last_name' => 'error',
            'email' => 'default'.rand(100,999).'@mail.com',
            'password' => rand(100,999),
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
            'address_in_bd' => NULL,
            'bd_telephone' => NULL,
            'bd_mobile' => $profile['phone_no'],
            'dob' => $profile['dob'],
            'sex' => $profile['gender'],
            'marital_status' => $profile['marital_status'],
            'blood_group' => $profile['blood_group'],
            'religion' => $profile['religion_id'],
            'place_of_birth' => $profile['birth_place'],
            'present_nationality' => 'Default',
            'country_of_birth' => NULL,
            'interested_subject' => "Default",
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
            'guardian_mobile' => $profile['e_cellno'],
            'o_name_of_exam' => $profile['e_exam_name1'],
            'o_group' => $profile['e_group1'],
            'o_roll_no' => $profile['e_roll_no_1'],
            'o_year_of_passing' => $profile['e_passing_year1'],
            'o_letter_grade' => $profile['e_ltr_grd_tmark1'],
            'o_cgpa' => $profile['e_div_cls_cgpa2'],
            'o_board' => $profile['e_board_university2'],
            'o_link_of_certificate' => NULL,
            'o_registration_no' => $profile['reg_code'],
            'student_id' => $profile['id'],
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
