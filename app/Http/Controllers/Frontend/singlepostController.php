<?php

namespace App\Http\Controllers\Frontend;

use App\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class singlepostController extends Controller
{
    public function single($id)
    {

        $res = Post::where('id',$id)->first();
        return view("layouts.frontend.singlepost",compact('res'));
    }
}
