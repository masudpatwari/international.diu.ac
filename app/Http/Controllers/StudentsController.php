<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ForeignStudent;
use App\Libraries\ApiReader;

class StudentsController extends Controller
{
    public function index()
    {
        $data['profiles'] = ForeignStudent::with('relUser')->get();
        return view('admin.foreign_student.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $data['profile'] = User::with('relStudent')->find($id);
        return view('admin.foreign_student.show', $data);
    }

    public function move_to_step_one($id)
    {
        $data['profile'] = User::find($id);
        $data['admission_batch'] = ApiReader::admission_on_going_batch();
        return view('admin.foreign_student.step_one', $data);
    }

    public function move_to_step_two($id, $batch_id)
    {
        $data['profile'] = User::find($id);
        $data['batch'] = ApiReader::admission_on_going_batch($batch_id);
        return view('admin.foreign_student.step_two', $data);
    }

    public function move_to_confirm(Request $request, $id, $batch_id)
    {
        $profile = User::with('relStudent')->find($id);
        $admission_batch = ApiReader::admission_on_going_batch($batch_id);
        $array = [
            'NAME' => $profile->first_name." ".$profile->last_name,
            'PASSWORD' => 'diu123',
            'DEPARTMENT_ID' => $admission_batch->dept_id,
            'BATCH_ID' => $admission_batch->id,
            'SHIFT_ID' => $admission_batch->shift_id,
            'YEAR' => date('Y'),
            'GROUP_ID' => $admission_batch->group_id,
            'BLOOD_GROUP' => $profile->relStudent->blood_group,
            'EMAIL' => $profile->email,
            'PHONE_NO' => $profile->relStudent->bd_mobile,
            'ADM_FRM_SL' => $request->adm_frm_no,
            'RELIGION_ID' => $profile->relStudent->religion,
            'GENDER' => $profile->relStudent->sex,
            'DOB' => $profile->relStudent->dob,
            'BIRTH_PLACE' => $profile->relStudent->place_of_birth,
            'FG_MONTHLY_INCOME' => $profile->relStudent->fg_monthly_income,
            'PARMANENT_ADD' => $profile->relStudent->permanent_address,
            'MAILING_ADD' => $profile->relStudent->present_address,
            'F_NAME' => $profile->relStudent->father_name,
            'F_CELLNO' => $profile->relStudent->father_mobile,
            'M_NAME' => $profile->relStudent->mother_name,
            'M_CELLNO' => $profile->relStudent->mother_mobile,
            'G_NAME' => $profile->relStudent->guardian_name,
            'G_CELLNO' => $profile->relStudent->guardian_mobile,
            'E_NAME' => $profile->relStudent->emergency_name,
            'E_CELLNO' => $profile->relStudent->emergency_mobile,
            'EMP_ID' => auth()->user()->id,
            'NATIONALITY' => $profile->relStudent->present_nationality,
            'MARITAL_STATUS' => $profile->relStudent->marital_status,
            'IMAGE' => NULL,
            'FILENAME' => $profile->profile_photo,
            'ADM_DATE' => date('Y-m-d'),
            'CAMPUS_ID' => $admission_batch->campus_id,
            'STD_BIRTH_OR_NID_NO' => $profile->relStudent->passport_no,
            'E_EXAM_NAME1' => $profile->relStudent->o_name_of_exam,
            'E_GROUP1' => $profile->relStudent->o_group,
            'E_ROLL_NO_1' => $profile->relStudent->o_roll_no,
            'E_PASSING_YEAR1' => $profile->relStudent->o_year_of_passing,
            'E_LTR_GRD_TMARK1' => $profile->relStudent->o_letter_grade,
            'E_DIV_CLS_CGPA1' => $profile->relStudent->o_cgpa,
            'E_BOARD_UNIVERSITY1' => $profile->relStudent->o_board,
        ];

        return ApiReader::admission($array);
    }

    public function src_by_reg(Request $request)
    {
        $std = ApiReader::src_by_reg($request->reg_no);
        if (!empty($std))
        {
            $data['profile'] = $std;
            return view('admin.foreign_student.profile2', $data);
        }
        else
        {
            $request->session()->flash('message', ['error' => 'No Record Found!']);
        }
    }
}
