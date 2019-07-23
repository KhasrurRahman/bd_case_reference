<?php

namespace App\Http\Controllers\Admin;
use App\category;
use App\civil;
use App\main_categories;
use App\MainCategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcategory = category::latest()->get();
        return view('admin.maincategory.index',compact('allcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.maincategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $category = new category();
        $category -> name = $request -> name;
        $category -> save();

        Toastr::success('Tag successfully saved','Success');
        return redirect()->route('admin.maincategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::find($id);
        return view('admin.maincategory.edit',compact('category'));
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
        $this::validate($request,[
           'name' => 'required'
        ]);
        $category = category::find($id);
        $category->name = $request->name;
        $category->update();

        Toastr::success('Main Category Update Successfuly','Sucsess');
        return redirect()->route('admin.maincategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::find($id)->delete();
        Toastr::success('Category Successfully Deleted','Success');
        return redirect()->route('admin.maincategory.index');
    }
}
