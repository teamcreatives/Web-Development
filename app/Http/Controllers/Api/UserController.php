<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
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
    public function getServices(){
        $services = Service::with('category')->get();
        return response()->json([
            'status' => true,
            'services' => $services
        ], 200);
    }

}
