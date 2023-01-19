<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ServiceRequest;

class AdminController extends Controller
{
    //

    public function landingPage(){

        return view('landingpage');
    }

    public function drycleaning(){

        $user=auth()->user();

        $services = Service::all();

         return view('drycleaning',['user' => $user], ['services' => $services]);

    }



    public function homecleaning(){

        $user=auth()->user();

        $services = Service::all();

        return view('homecleaning',['user' => $user], ['services' => $services]);
    }


    public function washing(){

        $user=auth()->user();

        return view('DryCleaning.washing',['user' => $user]);
    }

    // public function create(){

    //     return view('admin.create');

    // }


    // public function edit($id){

    //     $service =Service::find($id);
    //     return view('admin.edit',['services' => $service ]);

    // }



    // public function store(ServiceRequest $request){

    //     try {
    //         // dd($request->all());
    //         //code...
    //         $service = Service::create($request->except('category'));
    //         $category = [];
    //         collect($request->only('category')['category'])->map(
    //             function($item, $key) use ($service, &$category){
    //                 array_push($category, ['name' => $item]);
    //             }
    //         );
    //         // dd($category);
    //         $service->category()->createMany($category);
    //         DB::commit();
    //     } catch (\Throwable $th) {
    //         DB::rollBack();
    //         throw $th;
    //     }


    //     return redirect()->back()->withInput($request->input())->with('message', 'Service Created');

    // }

}
