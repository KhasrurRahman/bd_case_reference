<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $categories = DB::table('categories')->pluck("name","id");
        return view('welcome',compact('categories'));
    }

    public function civillist($id) {
        $civil = DB::table("civils")->where("category_id",$id)->pluck("civil_name","id");
        return json_encode($civil);
    }

    public function actlist($id) {
        $act = DB::table("acts")->where("civil_id",$id)->pluck("name","id");
        return json_encode($act);
    }
}
