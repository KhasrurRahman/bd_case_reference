<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $post = post::orderBy('created_at', 'desc')->paginate(5);
        return view('welcome',compact('post'));
    }

    public function civillist($id) {
        $civil = DB::table("civils")->where("category_id",$id)->pluck("civil_name","id");
        return json_encode($civil);
    }

    public function actlist($id) {
        $act = DB::table("acts")->where("civil_id",$id)->pluck("name","id");
        return json_encode($act);
    }


    public function aboutus()
    {
        return view("layouts.frontend.aboutus");
    }




}
