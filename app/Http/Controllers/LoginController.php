<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $validator = $request->validate(
            [
                'email' => 'required|email',
            ]
        );

        $user = User::where('email', $request->email)->first();
        if ( !empty($user) )
        {
            if(Hash::check($request->password, $user->password)) {

                session()->put('user.id', $user->id);
                session()->put('user.name', $user->name);
                session()->put('user.email', $user->email);

                return response()->json(['message'=> 1]);
            }else
            {
                return response()->json(['message'=> 'Record not found!']);
            }
        }else
        {
            return response()->json(['message'=> 'Record not found!']);
        }
    }

    public function logout(Request $request)
    {
        return redirect()->route('/');
    }
}
