<?php

namespace App\Http\Controllers\Auth;

use App\Libraries\CountriesArray;
use App\User;
use App\ForeignStudent;
use App\Agent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Libraries\ApiCourseFee;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        /*return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);*/
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        /*return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);*/
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'interested_subject' => 'required',
                'present_nationality' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|max:20',
            ]
        );

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'student';
        $user->save();

        $student = new ForeignStudent();
        $student->user_id = $user->id;
        $student->interested_subject = $request->interested_subject;
        $student->present_nationality = $request->present_nationality;
        $student->save();

        return redirect()->back()->with('message', ['success' => 'Registration successful!']);
    }

    public function showRegistrationForm()
    {
        $data['courses'] = ApiCourseFee::course_fee()->pluck('name', 'name');
        $data['country'] = CountriesArray::country()->pluck('name', 'name');
        return view('auth.register', $data);
    }

    public function showAgentRegistrationForm()
    {
        $data['country'] = CountriesArray::country()->pluck('name', 'name');
        return view('auth.agent.register', $data);
    }

    public function registerAgent(Request $request)
    {
        $request->validate(
            [
                'type_of_agent' => 'required',
                'first_name' => 'required|max:40',
                'last_name' => 'required|max:40',
                'country_name' => 'required|max:40',
                'email' => 'required|email',
                'password' => 'required|min:6|max:20',
                'present_address' => 'required',
                'present_mobile_no' => 'required',
                'present_fax_no' => 'required',
                'permanent_address' => 'required',
                'permanent_lan_phone_no' => 'required',
                'permanent_mobile_no' => 'required',
                'permanent_fax_no' => 'required',
                'primary_person_name' => 'required|max:40',
                'primary_person_photo' => 'required|max:20',
                'primary_person_designation' => 'required|max:20',
                'primary_person_mobile_no' => 'required',
                'primary_person_email' => 'required|email',
                'secondary_person_name' => 'required|max:40',
                'secondary_person_photo' => 'required|max:20',
                'secondary_person_designation' => 'required|max:20',
                'secondary_person_mobile_no' => 'required',
                'secondary_person_email' => 'required|email',
                'whatsup_no' => 'required',
            ]
        );

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'agent';
        $user->save();

        $agent = new Agent();
        $agent->user_id = $user->id;
        $agent->type_of_agent = $request->type_of_agent;
        $agent->country_name = $request->country_name;
        $agent->present_address = $request->present_address;
        $agent->present_mobile_no = $request->present_mobile_no;
        $agent->present_fax_no = $request->present_fax_no;
        $agent->permanent_address = $request->permanent_address;
        $agent->permanent_lan_phone_no = $request->permanent_lan_phone_no;
        $agent->permanent_mobile_no = $request->permanent_mobile_no;
        $agent->permanent_fax_no = $request->permanent_fax_no;
        $agent->primary_person_name = $request->primary_person_name;
        $agent->primary_person_photo = NULL;
        $agent->primary_person_designation = $request->primary_person_designation;
        $agent->primary_person_mobile_no = $request->primary_person_mobile_no;
        $agent->primary_person_email = $request->primary_person_email;
        $agent->secondary_person_name = $request->secondary_person_name;
        $agent->secondary_person_photo = NULL;
        $agent->secondary_person_designation = $request->secondary_person_designation;
        $agent->secondary_person_mobile_no = $request->secondary_person_mobile_no;
        $agent->secondary_person_email = $request->secondary_person_email;
        $agent->trade_license = NULL;
        $agent->tin_certificate = NULL;
        $agent->whatsup_no = $request->whatsup_no;
        $agent->save();

        return redirect()->back()->with('message', ['success' => 'Registration successful!']);
    }
}
