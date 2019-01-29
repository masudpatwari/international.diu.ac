<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ForeignStudent;
use App\Libraries\ApiReader;
use Illuminate\Support\Facades\Cache;

class MoveStudentController extends Controller
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
        Cache::forget('move_to');
        $expiresAt = now()->addMinutes(1000);

        $data['profile'] = User::with('relStudent')->find($id);
        $data['admission_batch'] = ApiReader::admission_on_going_batch();

        Cache::put('move_to', $data, $expiresAt);
        return view('admin.foreign_student.step_one', $data);
    }

    public function move_to_step_two($id, $batch_id)
    {
        if (Cache::has('move_to')) {
            $cache_values = Cache::get('move_to');
            $data['profile'] = collect($cache_values['profile']);
            $collection = collect($cache_values['admission_batch']);
            $data['batch'] = $collection->where('id', $batch_id)->first();

            $profile = collect($cache_values['profile']);
            $admission_batch = $collection->where('id', $batch_id)->first();

            $data['admission'] = [
                'NAME' => $profile['name'],
                'ROLL_NO' => 1,
                'REG_CODE' => 1,
                'PASSWORD' => 'diu123',
                'DEPARTMENT_ID' => $admission_batch->dept_id,
                'BATCH_ID' => $admission_batch->id,
                'SHIFT_ID' => $admission_batch->shift_id,
                'YEAR' => date('Y'),
                'GROUP_ID' => $admission_batch->group_id,
                'BLOOD_GROUP' => $profile['rel_student']['blood_group'],
                'EMAIL' => $profile['email'],
                'PHONE_NO' => $profile['rel_student']['bd_mobile'],
                'RELIGION_ID' => $profile['rel_student']['religion'],
                'GENDER' => $profile['rel_student']['sex'],
                'DOB' => $profile['rel_student']['dob'],
                'BIRTH_PLACE' => $profile['rel_student']['place_of_birth'],
                'FG_MONTHLY_INCOME' => $profile['rel_student']['fg_monthly_income'],
                'PARMANENT_ADD' => $profile['rel_student']['permanent_address'],
                'MAILING_ADD' => $profile['rel_student']['present_address'],
                'F_NAME' => $profile['rel_student']['father_name'],
                'F_CELLNO' => $profile['rel_student']['father_mobile'],
                'M_NAME' => $profile['rel_student']['mother_name'],
                'M_CELLNO' => $profile['rel_student']['mother_mobile'],
                'G_NAME' => $profile['rel_student']['guardian_name'],
                'G_CELLNO' => $profile['rel_student']['guardian_mobile'],
                'E_NAME' => $profile['rel_student']['emergency_name'],
                'E_CELLNO' => $profile['rel_student']['emergency_mobile'],
                'EMP_ID' => auth()->user()->id,
                'NATIONALITY' => $profile['rel_student']['present_nationality'],
                'MARITAL_STATUS' => $profile['rel_student']['marital_status'],
                'IMAGE' => NULL,
                'FILENAME' => $profile['profile_photo'],
                'ADM_DATE' => date('Y-m-d'),
                'CAMPUS_ID' => $admission_batch->campus_id,
                'STD_BIRTH_OR_NID_NO' => $profile['rel_student']['passport_no'],
                'E_EXAM_NAME1' => $profile['rel_student']['o_name_of_exam'],
                'E_GROUP1' => $profile['rel_student']['o_group'],
                'E_ROLL_NO_1' => $profile['rel_student']['o_roll_no'],
                'E_PASSING_YEAR1' => $profile['rel_student']['o_year_of_passing'],
                'E_LTR_GRD_TMARK1' => $profile['rel_student']['o_letter_grade'],
                'E_DIV_CLS_CGPA1' => $profile['rel_student']['o_cgpa'],
                'E_BOARD_UNIVERSITY1' => $profile['rel_student']['o_board'],
                'E_EXAM_NAME2' => $profile['rel_student']['t_name_of_exam'],
                'E_GROUP2' => $profile['rel_student']['t_group'],
                'E_ROLL_NO_2' => $profile['rel_student']['t_roll_no'],
                'E_PASSING_YEAR2' => $profile['rel_student']['t_year_of_passing'],
                'E_LTR_GRD_TMARK2' => $profile['rel_student']['t_letter_grade'],
                'E_DIV_CLS_CGPA2' => $profile['rel_student']['t_cgpa'],
                'E_BOARD_UNIVERSITY2' => $profile['rel_student']['t_board'],
                'E_EXAM_NAME3' => $profile['rel_student']['th_name_of_exam'],
                'E_GROUP3' => $profile['rel_student']['th_group'],
                'E_ROLL_NO_3' => $profile['rel_student']['th_roll_no'],
                'E_PASSING_YEAR3' => $profile['rel_student']['th_year_of_passing'],
                'E_LTR_GRD_TMARK3' => $profile['rel_student']['th_letter_grade'],
                'E_DIV_CLS_CGPA3' => $profile['rel_student']['th_cgpa'],
                'E_BOARD_UNIVERSITY3' => $profile['rel_student']['th_board'],
                'E_EXAM_NAME4' => $profile['rel_student']['fo_name_of_exam'],
                'E_GROUP4' => $profile['rel_student']['fo_group'],
                'E_ROLL_NO_4' => $profile['rel_student']['fo_roll_no'],
                'E_PASSING_YEAR4' => $profile['rel_student']['fo_year_of_passing'],
                'E_LTR_GRD_TMARK4' => $profile['rel_student']['fo_letter_grade'],
                'E_DIV_CLS_CGPA4' => $profile['rel_student']['fo_cgpa'],
                'E_BOARD_UNIVERSITY4' => $profile['rel_student']['fo_board'],
            ];
            return view('admin.foreign_student.step_two', $data);
        }
    }
}
