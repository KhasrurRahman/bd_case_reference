<?php

namespace App\Http\Controllers\Admin;

use App\act;
use App\section;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = section::all();
        $act = act::all();
        return view('admin.section.index',compact('section','act'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $section = section::all();
        $act = act::all();
        return view('admin.section.create',compact('section','act'));
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
            'name'=>'required',
            'act_id'=>'required'
        ]);

        $section = new section();
        $section->name = $request->name;
        $section->act_id = $request->act_id;
        $section->save();

        Toastr::success('Section/Article/Rules added successfully','Success');
        return redirect()->route('admin.section.index');
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
        $section = section::find($id);
        $act = act::all();
        return view('admin.section.edit',compact('section','act'));
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
            'name'=>'required',
            'act_id'=>'required'
        ]);


        $old_act_id = section::find($id)->act_id;
        $section = section::find($id);
        $section->name = $request->name;
        if ($request->act_id == '1st select civil'){
            $section->act_id = $old_act_id;
        }else{

            $section->act_id = $request->act_id;
        }

        $section->update();

        Toastr::success('Section/Article/Rules updated successfully','Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        section::find($id)->delete();

        Toastr::success('Section/Article/Rules deleted successfully','Success');
        return redirect()->back();
    }
}
