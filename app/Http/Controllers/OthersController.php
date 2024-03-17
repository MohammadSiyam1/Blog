<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\ContactMessages;
use Illuminate\Http\Request;

class OthersController extends Controller
{
    function viewAboutUs(){
        $id=1;
        $aboutus=AboutUs::where('id',$id)->first();
        return view('backend.about',compact('aboutus'));
    }
    function aboutUs(Request $request, $id){
        $aboutUs= AboutUs::find($id);
        $aboutUs->body = $request->body;
        $aboutUs->save();
        return redirect()->route('about.view');
    }

    function contactMessages(){
        $msgs=ContactMessages::latest()->get();
        return view('backend.contactMessages',compact('msgs'));
    }

    function deleteMessages($id){
        ContactMessages::find($id)->delete();
        return redirect()->route('contactmessages')->with('message','Message has been deleted');
    }
}


