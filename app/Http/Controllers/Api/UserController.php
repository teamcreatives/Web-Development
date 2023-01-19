<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    //


    public function index(){

        $user=auth()->user();

        return view('index', ['user' => $user]);


    }

    
    public function profile($id){

        $user= User::find($id);

        return view('profile', ['user' => $user]);

    }

}
