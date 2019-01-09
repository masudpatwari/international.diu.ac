<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Agent;
use App\Libraries\CountriesArray;

class AgentController extends Controller
{
    public function index()
    {
        $data['agents'] = Agent::all();
        return view('admin.agent.index', $data);
    }

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
        $request->validate(
            [
                'type_of_agent' => 'required',
                'name_of_agent' => 'required|max:40',
                'country_name' => 'required|max:40',
                'email' => 'required|email',
                'password' => 'required|min:6|max:20',
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

        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->name = $request->name_of_agent;
        $user->save();

        $agent = new Agent();
        $agent->user_id = $user->id;
        $agent->type_of_agent = $request->type_of_agent;
        $agent->country_name = $request->country_name;
        $agent->pra_address = $request->pra_address;
        $agent->pra_mobile_no = $request->pra_mobile_no;
        $agent->pra_fax_no = $request->pra_fax_no;
        $agent->per_address = $request->per_address;
        $agent->per_lan_phone_no = $request->per_lan_phone_no;
        $agent->per_mobile_no = $request->per_mobile_no;
        $agent->per_fax_no = $request->per_fax_no;
        $agent->pri_person_name = $request->pri_person_name;
        $agent->pri_photograph = NULL;
        $agent->pri_designation = $request->pri_designation;
        $agent->pri_mobile_no = $request->pri_mobile_no;
        $agent->pri_email = $request->pri_email;
        $agent->sec_person_name = $request->sec_person_name;
        $agent->sec_photograph = NULL;
        $agent->sec_designation = $request->sec_designation;
        $agent->sec_mobile_no = $request->sec_mobile_no;
        $agent->sec_email = $request->sec_email;
        $agent->trade_license = NULL;
        $agent->tin_certificate = NULL;
        $agent->whatsup_no = $request->whatsup_no;
        $agent->save();

        if ( !empty($user->id) && !empty($agent->id) )
        {
            return response()->json(['message'=> ['success' => 'Record Saved!']]);
        }
        else
        {
            $user->destroy($user->id);
            $agent->destroy($agent->id);
            return response()->json(['message'=> ['error' => 'Record not Save!']]);
        }
    }

    public function show($id)
    {
        $data['agent'] = Agent::where('user_id', $id)->with('relUser')->first();
        $data['country'] = CountriesArray::country();
        return view('admin.agent.show', $data);
    }

    public function edit($id)
    {
        $data['agent'] = Agent::where('user_id', $id)->with('relUser')->first();
        $data['country'] = CountriesArray::country()->pluck('name', 'name');
        return view('admin.agent.edit', $data);
    }

    public function update(Request $request, $id)
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

        $user = User::with('relAgent')->findOrFail($id);
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
            $request->session()->flash('message', ['success' => 'Agent Update successful!']);
        }
        else
        {
            $request->session()->flash('message', ['error' => 'Update Failed!']);
        }
        return redirect()->route('agent.index');
    }
}
