<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ajaxController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->pluck("name","id");
        $section = DB::table('categories')->pluck("name","id");
        return view('admin.post.create',compact('categories','section'));
    }

    public function civillist($id) {
        $civil = DB::table("civils")->where("category_id",$id)->pluck("civil_name","id");
        return json_encode($civil);
    }

    public function actlist($id) {
        $act = DB::table("acts")->where("civil_id",$id)->pluck("name","id");
        return json_encode($act);
    }

    public function sectionlist($id) {
        $section = DB::table("sections")->where("act_id",$id)->get();
        return json_encode($section);
    }
}
