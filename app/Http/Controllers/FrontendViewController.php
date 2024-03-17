<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\ContactMessages;
use Illuminate\Http\Request;

class FrontendViewController extends Controller
{
    function home(){
        $blogs=Blogs::limit(3)->get();
        return view('frontend.index',compact('blogs'));
    }

    function showblog(){
        $blogs=Blogs::latest()->get();
        return view('frontend.blogs',compact('blogs'));
    }

    function viewFullBlog($slug){
        $blog=Blogs::where('Slug',$slug)->first();
        return view('frontend.view-full-blog',compact('blog'));
    }

    function contactUs(Request $request){
        return view('frontend.contactUs');
    }

    function storeContactDetails(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $msg=new ContactMessages();
        $msg->name=$request->name;
        $msg->email=$request->email;
        $msg->message=$request->message;
        $msg->save();
        return redirect()->route('frontend.contactUs')->with('message','Your message reached to us, we will contact with you soon');
    }
}
