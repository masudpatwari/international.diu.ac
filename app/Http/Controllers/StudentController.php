<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use App\CourseFee;
use App\User;
use App\Ticket;
use App\ForeignStudent;
use App\Libraries\CountriesArray;
use App\Libraries\ApiReader;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['profiles'] = ForeignStudent::where('referral_id', auth()->user()->id)->with('relUser')->get();
        return view('admin.student.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['courses'] = CourseFee::all()->pluck('name', 'name');
        $data['country'] = CountriesArray::country()->pluck('name', 'name');
        return view('admin.student.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'interested_subject' => 'required',
                'present_nationality' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|max:20',
            ]
        );

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = date('Y-m-d h:m:s');
        $user->password = bcrypt($request->password);
        $user->role = 'student';
        $user->save();

        $ticket = new Ticket();
        $ticket->name = $request->name;
        $ticket->email = $request->email;
        $ticket->present_nationality = $request->present_nationality;
        $ticket->interested_subject = $request->interested_subject;
        $ticket->body = "Please give me the information about this {$request->interested_subject}";
        $ticket->status = 1;
        $ticket->agent_id = (auth()->user()->role == 'agent') ? auth()->user()->id : NULL;
        $ticket->save();

        $student = new ForeignStudent();
        $student->user_id = $user->id;
        $student->interested_subject = $request->interested_subject;
        $student->present_nationality = $request->present_nationality;
        $student->referral_id = auth()->user()->id;
        $student->save();

        return redirect()->back()->with('message', ['success' => 'Registration successful!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['profile'] = User::with('relStudent')->find($id);
        return view('admin.student.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['blood_group'] = bloodGroup()->pluck('name', 'name');
        $data['religion'] = ApiReader::religion()->pluck('name', 'id');
        $data['country'] = CountriesArray::country()->pluck('name', 'name');
        $data['courses'] = CourseFee::all()->pluck('name', 'name');
        $data['profile'] = User::with('relStudent')->find($id);
        return view('admin.student.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'present_nationality' => 'required',
                'interested_subject' => 'required',
            ]
        );

        $user = User::with('relStudent')->find($id);
        $user->name = $request->name;
        $user->relStudent->permanent_address = $request->permanent_address;
        $user->relStudent->permanent_telephone = $request->permanent_telephone;
        $user->relStudent->permanent_mobile = $request->permanent_mobile;
        $user->relStudent->present_address = $request->present_address;
        $user->relStudent->present_telephone = $request->present_telephone;
        $user->relStudent->present_mobile = $request->present_mobile;
        $user->relStudent->address_in_bd = $request->address_in_bd;
        $user->relStudent->bd_telephone = $request->bd_telephone;
        $user->relStudent->bd_mobile = $request->bd_mobile;
        $user->relStudent->dob = d2db($request->dob);
        $user->relStudent->sex = $request->sex;
        $user->relStudent->marital_status = $request->marital_status;
        $user->relStudent->blood_group = $request->blood_group;
        $user->relStudent->religion = $request->religion;
        $user->relStudent->place_of_birth = $request->place_of_birth;
        $user->relStudent->present_nationality = $request->present_nationality;
        $user->relStudent->country_of_birth = $request->country_of_birth;
        $user->relStudent->interested_subject = $request->interested_subject;
        $user->relStudent->passport_no = $request->passport_no;
        $user->relStudent->type_of_passport = $request->type_of_passport;
        $user->relStudent->date_of_issue = d2db($request->date_of_issue);
        $user->relStudent->date_of_expire = d2db($request->date_of_expire);
        $user->relStudent->date_of_last_visit_bd = d2db($request->date_of_last_visit_bd);
        $user->relStudent->last_visa_no = $request->last_visa_no;
        $user->relStudent->visa_category = $request->visa_category;
        $user->relStudent->visa_place_of_issue = $request->visa_place_of_issue;
        $user->relStudent->visa_date_of_issue = d2db($request->visa_date_of_issue);
        $user->relStudent->visa_date_of_expire = d2db($request->visa_date_of_expire);
        $user->relStudent->date_of_arrival_bd = d2db($request->date_of_arrival_bd);
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
        $user->relStudent->emergency_name = $request->emergency_name;
        $user->relStudent->emergency_nationality = $request->emergency_nationality;
        $user->relStudent->emergency_mobile = $request->emergency_mobile;
        $user->relStudent->fg_monthly_income = $request->fg_monthly_income;
        $user->relStudent->o_name_of_exam = $request->o_name_of_exam;
        $user->relStudent->o_group = $request->o_group;
        $user->relStudent->o_roll_no = $request->o_roll_no;
        $user->relStudent->o_year_of_passing = $request->o_year_of_passing;
        $user->relStudent->o_letter_grade = $request->o_letter_grade;
        $user->relStudent->o_cgpa = $request->o_cgpa;
        $user->relStudent->o_board = $request->o_board;
        $user->relStudent->o_link_of_certificate = $request->o_link_of_certificate;
        $user->relStudent->t_name_of_exam = $request->t_name_of_exam;
        $user->relStudent->t_group = $request->t_group;
        $user->relStudent->t_roll_no = $request->t_roll_no;
        $user->relStudent->t_year_of_passing = $request->t_year_of_passing;
        $user->relStudent->t_letter_grade = $request->t_letter_grade;
        $user->relStudent->t_cgpa = $request->t_cgpa;
        $user->relStudent->t_board = $request->t_board;
        $user->relStudent->t_link_of_certificate = $request->t_link_of_certificate;
        $user->relStudent->th_name_of_exam = $request->th_name_of_exam;
        $user->relStudent->th_group = $request->th_group;
        $user->relStudent->th_roll_no = $request->th_roll_no;
        $user->relStudent->th_year_of_passing = $request->th_year_of_passing;
        $user->relStudent->th_letter_grade = $request->th_letter_grade;
        $user->relStudent->th_cgpa = $request->th_cgpa;
        $user->relStudent->th_board = $request->th_board;
        $user->relStudent->th_link_of_certificate = $request->th_link_of_certificate;
        $user->relStudent->fo_name_of_exam = $request->fo_name_of_exam;
        $user->relStudent->fo_group = $request->fo_group;
        $user->relStudent->fo_roll_no = $request->fo_roll_no;
        $user->relStudent->fo_year_of_passing = $request->fo_year_of_passing;
        $user->relStudent->fo_letter_grade = $request->fo_letter_grade;
        $user->relStudent->fo_cgpa = $request->fo_cgpa;
        $user->relStudent->fo_board = $request->fo_board;
        $user->relStudent->fo_link_of_certificate = $request->fo_link_of_certificate;
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
        return redirect()->route('student.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
