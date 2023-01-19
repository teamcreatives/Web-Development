<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
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
    public function createEmployee()
    {
        //
        $admin=auth()->user();
        return view('admin.pages.forms.create_employee',['admin'=> $admin]);
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
        $valid = $request->validate([
                'name' => 'required|min:5|max:255',
                'email' => 'required|email|unique:employees,email',
                'phonenumber' =>  'required|min:11|string',
                'password' => 'required|confirmed|min:8',
                'gender' => 'required|max:10',
                'age' => 'required|min:2|max:5',
                'image' => 'required|mimes:jpg,png,jpeg',
                'city' => 'required|min:3|max:255',
                'service' => 'required|min:5|max:255',
        ]);

        $img_dir = $request->file('image')->store('images', 'public');

        Employee::create(array_merge($valid, ['image'=> $img_dir]));

        return redirect()->back()->withInput($request->input())->with('message', 'Employee Created Successful!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
        $admin=auth()->user();
        $employee=Employee::all();
        return view('admin.pages.tables.employee_table',['employee' => $employee,'admin'=> $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee,$id)
    {
        //

        $admin=auth()->user();
        $employee=Employee::findOrFail($id);

        return view('admin.pages.forms.edit_employee',['employee' => $employee,'admin'=> $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee,$id)
    {
        //

        $employee= Employee::findOrFail($id);

        // dd($employee);

        $valid = Validator::make($request->all(),[

            'name' => 'required|min:5|max:255',
            'email' => 'required',Rule::unique('employees')->ignore($employee),
            'phonenumber' => 'required|min:11|string',
            // 'password' => 'required|confirmed|min:8',
            'gender' => 'required|max:10',
            'age' => 'required|min:2|max:5',
            'image' =>'nullable|mimes:jpg,png,jpeg',
            'city' => 'required|min:3|max:255',
            'service' => 'required|min:5|max:255',

        ]);

        if($request->hasFile('image')){

            $img_dir = $request->file('image')->store('images', 'public');

            $employee->update(array_merge($valid, ['image' => $img_dir]));

        }else{

            $employee->update($request->all());
        }

        return redirect()->back()->withInput($request->input())->with('Message', 'Employee Updated!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee,$id)
    {
        //
        $employee=Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employee.table')->with('Message', 'Employee Deleted!');
    }


}
