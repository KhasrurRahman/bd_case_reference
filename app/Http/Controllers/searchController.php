<?php

namespace App\Http\Controllers;

use App\category;
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

        $search = Input::get('section_id');
        $post = post::all();

        $result = post::where('section_id','like','%'.$search.'%')
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
