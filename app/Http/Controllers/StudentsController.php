<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\ForeignStudent;
use App\Libraries\CountriesArray;

class StudentsController extends Controller
{
    public function index()
    {
        $data['students'] = ForeignStudent::with('relUser')->get();
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
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'interested_sub' => 'required|numeric',
                'pra_nationality' => 'required|numeric',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
            ]
        );

        $user = new User();
        $user->name = $request->first_name .' '. $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $student = new ForeignStudent();
        $student->user_id = $user->id;
        $student->interested_subject = $request->interested_sub;
        $student->pra_nationality = $request->pra_nationality;
        $student->save();

        if ( !empty($user->id) && !empty($student->id) )
        {
            return response()->json(['message'=> ['success' => 'Record Saved!']]);
        }
        else
        {
            $user->destroy($user->id);
            $student->destroy($student->id);
            return response()->json(['message'=> ['error' => 'Record not Save!']]);
        }
    }

    public function show()
    {
        $data['country'] = CountriesArray::country()->pluck('name', 'name');
        return view('admin.profile.student', $data);
    }
}
