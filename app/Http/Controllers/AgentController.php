<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Agent;

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
        $data['profile'] = User::with('relAgent')->find($id);
        return view('admin.agent.show', $data);
    }
}
