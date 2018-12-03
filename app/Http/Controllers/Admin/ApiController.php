<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function index()
    {
        $categories = DB::table("categories")->pluck("name","id");
        return view('welcome',compact('categories'));
    }




}
