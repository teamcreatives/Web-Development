<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $admin=auth()->user();
        return view('admin.create',['admin' => $admin]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        //
        try {
            // dd($request->all());
            //code...
            $service = Service::create($request->except('category'));
            $category = [];
            collect($request->only('category')['category'])->map(
                function($item, $key) use ($service, &$category){
                    array_push($category, ['name' => $item]);
                }
            );
            // dd($category);
            $service->category()->createMany($category);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }


        return redirect()->back()->withInput($request->input())->with('message', 'Service Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
        $admin=auth()->user();
        $service=Service::all();
        return view('admin.pages.tables.service_table', ['service' => $service, 'admin'=> $admin]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service,$id)
    {
        //
        $admin=auth()->user();
        $service =Service::find($id);

        return view('admin.pages.forms.edit_services',['service' => $service,'admin'=> $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service,$id)
    {
        //

        $service= Service::findOrFail($id);

        // dd($employee);

        $valid =$request->validate([

            'name' => 'required|min:5|max:255',


        ]);


            $service->update($valid);


        return redirect()->back()->withInput($request->input())->with('Message', 'Service Updated!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service,$id)
    {
        //
        $service=Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.table')->with('Message', 'Service Deleted!');
    }


}
