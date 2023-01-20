<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;



class ProfileController extends Controller
{
    //
    public function index(){

        $user=auth()->user();

        return view('index', ['user' => $user]);


    }



    public function profile($id){

        $user= User::find($id);

        return view('setting.profile', ['user' => $user]);

    }



    public function update(Request $request,$id){

        $user= User::findOrFail($id);
        // dd($user);
        $valid = $request->validate([

            'name' => 'required',
            'phonenumber' => 'required|min:11|string', Rule::unique('users')->ignore($user),
            'address' => 'required',
            'status' => 'required',

        ]);


        $user->update($valid);

        return redirect()->back()->with('Message', 'User Update');
    }



    public function info(){

        $user=auth()->user();

        return view('Setting.info',['user' => $user]);

    }


    public function changePassword(){

        return view('setting.changepassword');
    }


    public function updatePassword(Request $request)
    {
            # Validation
            $request->validate([
                'old_password' => 'required',
                'password' => 'required|confirmed',
            ]);
            $user = User::findOrFail(auth()->user()->id);
            #Match The Old Password
            if(!Hash::check($request->input('old_password'), $user->password)){
                return back()->with("error", "Old Password Doesn't match!");
            }


            #Update the new Password
            $user->update([
                'password' => Hash::make($request->new_password)
            ]);

            return back()->with("status", "Password changed successfully!");
    }

}


