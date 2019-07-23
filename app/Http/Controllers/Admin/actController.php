<?php

namespace App\Http\Controllers\Admin;

use App\act;
use App\civil;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class actController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $act = act::all();
        return view('admin.act.index',compact('act'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $act = act::get();
        $civil = civil::get();
        return view('admin.act.create',compact('act','civil'));
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
           'civil_id'=>'required'
        ]);

        $act = new act();
        $act->name = $request->name;
        $act->civil_id = $request->civil_id;
        $act->save();

        Toastr::success('Act/Law/Rules added successfully','Success');
        return redirect()->route('admin.act.index');
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
        $act = act::find($id);
        $civil = civil::all();
        return view('admin.act.edit',compact('act','civil'));
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
            'name' => 'required',
            'civil_id' => 'required',
        ]);

        $act = act::find($id);
        $act->name = $request->name;
        $act->civil_id = $request->civil_id;
        $act->update();

        Toastr::success('Act/Law/Rules Updated successfully','Success');
        return redirect()->route('admin.act.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        act::find($id)->delete();

        Toastr::success('Act/Law/Rules deleted successfully','Success');
        return redirect()->back();
    }
}
