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
        $data['profiles'] = Agent::with('relUser')->get();
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
        //
    }

    public function show($id)
    {
        $data['profile'] = Agent::with('relUser')->where('user_id', $id)->first();
        return view('admin.agent.show', $data);
    }
}
