<?php

namespace App\Http\Controllers;

use App\Employee;
use App\User;
use Illuminate\Http\Request;
use App\Libraries\ApiReader;
use Illuminate\Support\Facades\Cache;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [];
        if ($request->input('name')) {
            $request->validate(
                [
                    'name' => 'required',
                ],
                [
                    'name.required' => 'Employee name is required',
                ]
            );
            $data['employees'] = ApiReader::wp_emp($request);
            return view('admin.employee.index', $data);
        }
        $data['exists_employees'] = User::with('relEmployee')->where('role', 'employee')->get();
        return view('admin.employee.index', $data);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [];
        if (Cache::has('wp_emp')) {
            $cache_values = Cache::get('wp_emp');
            $employee = collect($cache_values)->where('id', $id)->first();
            $data['employee'] = [
                'id' => $employee->id,
                'name' => $employee->name,
                'position' => $employee->position,
                'dept' => $employee->dept,
                'email1' => $employee->email1,
                'mno1' => $employee->mno1,
                'profilepic' => $employee->profilepic,
                'merit' => $employee->merit,
            ];
        }
        else
        {
            $employee = Employee::with('relUser')->where('emp_id', $id)->first();
            $data['employee'] = [
                'id' => $employee->id,
                'name' => $employee->relUser->name,
                'position' => $employee->position,
                'dept' => $employee->department,
                'email1' => $employee->relUser->email,
                'mno1' => $employee->mobile_no,
                'profilepic' => $employee->relUser->profilepic,
                'merit' => $employee->merit,
            ];
        }
        $data['exists'] = Employee::where('emp_id', $id)->exists();
        return view('admin.employee.show', $data);
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
        if (Cache::has('wp_emp')) {
            $cache_values = Cache::get('wp_emp');
            $employee = collect($cache_values)->where('id', $id)->first();
            $users = User::create([
                'name' => $employee->name,
                'email' => $employee->email1,
                'email_verified_at' => date('Y-m-d h:m:s'),
                'password' => bcrypt('123456'),
                'role' => 'employee',
                'profile_photo' => $employee->profilepic,
            ]);

            $employees = Employee::create([
                'user_id' => $users->id,
                'emp_id' => $employee->id,
                'position' => $employee->position,
                'department' => $employee->dept,
                'mobile_no' => $employee->mno1,
                'merit' => $employee->merit,
                'created_by' => auth()->user()->id,
            ]);

            if (!empty($users->id) && !empty($employees->id))
            {
                session()->flash('message', ['success' => 'Create successful!']);
            }
            else
            {
                session()->flash('message', ['error' => 'Create Failed!']);
            }
        }
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exists = Employee::with('relUser')->where('emp_id', $id);
        if ($exists->exists()) {
            $users = $exists->first();
            $users->delete();
            $users->relUser->delete();
            session()->flash('message', ['success' => 'Delete successful!']);
        }
        else
        {
            session()->flash('message', ['error' => 'Delete Failed!']);
        }
        return redirect()->route('employee.index');
    }
}
