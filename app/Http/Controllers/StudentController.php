<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use App\CourseFee;
use App\User;
use App\Ticket;
use App\ForeignStudent;
use App\Libraries\CountriesArray;

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
        //
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
        //
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
