<?php

namespace App\Http\Controllers;

use App\act;
use App\category;
use App\civil;
use App\post;
use App\section;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class searchController extends Controller
{
    public function search()
    {

        $search = Input::get('search');
        if($search == '')
        {
            Toastr::success('Your search field is Impty','Success');
            return redirect()->back();
        }


        $result = post::where('body','like','%'.$search.'%')
            ->orWhere('title','like','%'.$search.'%')
            ->orWhere('category','like','%'.$search.'%')
            ->orWhere('civil','like','%'.$search.'%')
            ->orWhere('act','like','%'.$search.'%')
            ->orWhere('section','like','%'.$search.'%')
            ->orderBy('created_at', 'desc')->paginate(5);

        if ($result->isEmpty())
        {
            Toastr::success('No Result Found','Success');
            return redirect()->back();
        }
        else{
            return view('layouts.search',compact('result','search'));
        }

    }

    public function search2()
    {

        $category = Input::get('category');
        $category_name = category::find($category)->name;
        $civil = Input::get('civil');
        $civil_name = civil::find($civil)->civil_name;
        $act = Input::get('act');
        $act_name = act::find($act)->name;
        $section = Input::get('section_id');
        $section_name = section::find($section)->name;

//        $post = post::all();

        $result = post::where('category','=', $category_name)
            ->Where('civil','=',$civil_name)
            ->Where('act','=',$act_name)
            ->Where('section','=',$section_name)
            ->orderBy('created_at', 'desc')->paginate(500000);

//            echo $category_name .'->' .$civil_name .'->'.$act_name .'->'.$section_name;


        if ($result->isEmpty())
        {
            Toastr::success('No Result Found','Success');
            return redirect()->back();
        }
        else{
            return view('layouts.search',compact('result'));
        }



    }


    public function autocomplete(Request $request)
    {
        if ($request->get('query'))
        {
            $query = $request->get('query');
            $data = post::where('title','like','%'.$query.'%')
                ->orWhere('category','like','%'.$query.'%')
                ->orWhere('civil','like','%'.$query.'%')
                ->orWhere('act','like','%'.$query.'%')
                ->orWhere('section','like','%'.$query.'%')->get();

            $output = '<ul class="dropdown-menu" style="display:block;position:relative">';

            foreach ($data as $row)
            {
                $output .='<li><a href ="#">'.$row->title.'</a></li>';
                $output .='<li><a href ="#">'.$row->civil.'</a></li>';
                $output .='<li><a href ="#">'.$row->category.'</a></li>';
                $output .='<li><a href ="#">'.$row->act.'</a></li>';
            }
            $output .='</ul>';
            echo  $output;
        }
    }



}
