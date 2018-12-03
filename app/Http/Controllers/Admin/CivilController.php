<?php

namespace App\Http\Controllers\Admin;

use App\category;
use App\civil;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $civil = civil::get();
        return view('admin.civil.index',compact('civil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $civil = civil::get();
        $category = category::get();
        return view('admin.civil.create',compact('civil','category'));
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
            'civil_name' => 'required|unique:civils,civil_name',
            'category_id' => 'required',
        ]);

        $civil = new civil();
        $civil->civil_name = $request->civil_name;
        $civil->category_id = $request->category_id;
        $civil->save();

        Toastr::success('Civil,Criminal... add successfully','Success');
        return redirect()->route('admin.civil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $civil = civil::all();
        $category = category::all();
        return view('admin.civil.edit',compact('civil','category'));
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
        $this->validate($request,[
            'civil_name' => 'required',
            'category_id' => 'required',
        ]);

        $civil = civil::find($id);
        $civil->civil_name = $request->civil_name;
        $civil->category_id = $request->category_id;
        $civil->save();

        Toastr::success('Civil,Criminal... updated successfully','Success');
        return redirect()->route('admin.civil.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        civil::find($id)->delete();

        Toastr::success('Civil,Criminal... deleted successfully','Success');
        return redirect()->back();

    }
}
