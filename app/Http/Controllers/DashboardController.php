<?php

namespace App\Http\Controllers;

use app;
use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use App\Http\Requests\ServiceRequest;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    //
    public function index(){

        $admin=auth()->user();
        return view('admin.index',['admin' => $admin]);
    }



     public function userTable(){
        $admin=auth()->user();
        $user=User::all();
        return view('admin.pages.tables.user_table',['user' => $user,'admin' => $admin]);

     }


    public function appointment(){
        $admin=auth()->user();
        return view('admin.appointment',['admin' => $admin]);
    }

    public function revenue(){
        $admin=auth()->user();
        return view('admin.pages.charts.revenue',['admin' => $admin]);
    }

    public function settings(){
        $admin=auth()->user();
        return view('admin.setting',['admin' => $admin]);
    }





}
