<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ajaxController extends Controller
{
    public function civillist($id) {
        $civil = DB::table("civils")->where("category_id",$id)->get();
        return json_encode($civil);
    }

    public function actlist($id) {
        $act = DB::table("acts")->where("civil_id",$id)->get();
        return json_encode($act);
    }

    public function sectionlist($id) {
        $section = DB::table("sections")->where("act_id",$id)->get();
        return json_encode($section);
    }

    public function postlist($id) {
        $section = DB::table("posts")->where("section_id",$id)->get();
        return json_encode($section);
    }
}
