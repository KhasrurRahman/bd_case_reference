<?php

namespace App\Http\Controllers\Frontend;

use App\contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
    public function contactus()
    {
        return view("layouts.frontend.contactus");
    }

    public function contactus_save(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
            'message'=>'required',
        ]);
        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();



        Toastr::success('your message successfully send','Success');
        return redirect()->back();
    }
}
