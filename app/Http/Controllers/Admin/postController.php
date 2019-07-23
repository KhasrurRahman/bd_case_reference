<?php

namespace App\Http\Controllers\Admin;

use App\act;
use App\category;
use App\civil;
use App\post;
use App\section;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = post::latest()->get();
        return view('admin.post.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        $civil = civil::all();
        $act = act::all();
        $section = section::all();
        return view('admin.post.create',compact('category','civil','act','section'));
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

            'section_id'=>'required',
            'body'=>'required',
            'category'=>'required',
            'civil'=>'required',
            'act'=>'required',
        ]);
        $post = new post();
        $post->title = $request->title;
        $post->section_id = $request->section_id;
        $post->body = $request->body;
        $category = category::find($request->category)->name;
        $post->category = $category;
        $civil = civil::find($request->civil)->civil_name;
        $post->civil =$civil;
        $act = act::find($request->act)->name;
        $post->act = $act;
        $section = section::find($request->section_id)->name;
        $post->section = $section;
        $post->reference = $request->reference;
        $post->save();



        Toastr::success('post successfully Created','Success');
        return redirect()->route("admin.post.index");
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
        $post = post::find($id);
        $category = category::all();
        $civil = civil::all();
        $act = act::all();
        $section = section::all();
        return view('admin.post.edit',compact('post','section','category','civil','act'));
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
           'title'=>'required',
           'body'=>'required',
            'category'=>'required',
            'civil'=>'required',
            'act'=>'required',
        ]);


        $post = post::find($id);
        $post->title = $request->title;
        $post->reference = $request->reference;
        $post->section_id = $request->section_id;
        $post->body = $request->body;
        $post->category = $request->category;
        $post->civil = $request->civil;
        $post->act = $request->act;
        $section = section::find($request->section_id)->name;
        $post->section = $section;
        $post->update();

        Toastr::success('post updated successfully','Success');
        return redirect()->route('admin.post.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::find($id)->delete();

        Toastr::success('Post deleted successfully','Success');
        return redirect()->back();
    }
}
