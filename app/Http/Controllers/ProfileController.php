<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Agent;
use App\Libraries\CountriesArray;


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



    public function agent_profile_show()
    {
        $data['agent'] = Agent::where('user_id', session('user.id'))->with('relUser')->first();
        $data['country'] = CountriesArray::country()->pluck('name', 'name');
        return view('admin.profile.agent.show', $data);
    }

    public function agent_profile_edit()
    {
        $data['agent'] = Agent::where('user_id', session('user.id'))->with('relUser')->first();
        $data['country'] = CountriesArray::country()->pluck('name', 'name');
        return view('admin.profile.agent.edit', $data);
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

}
