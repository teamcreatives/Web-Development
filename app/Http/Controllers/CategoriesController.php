<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
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
     * Show the form for Categoryeating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CategoryCreate()
    {
        //
    }


    /**
     * Store a newly Categoryeated resource in storage.
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        $admin=auth()->user();
        $category=Category::with('service')->get();
        // dd($category);
        return view('admin.pages.tables.category_table',['category' => $category,'admin'=> $admin]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        //

        $admin=auth()->user();
        $category =Category::find($id);

        return view('admin.pages.forms.edit_categories',['category' => $category,'admin'=> $admin]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        //

        $category= Category::findOrFail($id);

        // dd($employee);

        $valid =$request->validate([

            'service_id' => 'min:5|max:255',
            'name' => 'required|min:5|max:255',
            'cost' => 'nullable|min:2|max:255',


        ]);


            $category->update($valid);


        return redirect()->back()->withInput($request->input())->with('Message', 'Category Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        //

        $category=Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.table')->with('Message', 'Category Deleted!');

    }
}
