<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ForeignStudent;

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
}
