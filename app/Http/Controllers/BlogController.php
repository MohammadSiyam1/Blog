<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blogs::all();

        return view('backend.blog.all-blogs',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'thumbnail' => 'required',
        ]);
        $image=$request->file('thumbnail');
        $img=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $request->thumbnail->move(public_path('thumbnails'),$img);
        $img_url='thumbnails/'.$img;

        $post=new Blogs();
        $post->Title = $request->title;
        $post->Slug = Str::slug($request->title);
        $post->Body = $request->body;
        $post->Thumbnail = $img_url;
        $post->Author = $request->author;
        $post->save();
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Blogs::find($id);
        return view('backend.blog.edit-blog',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=Blogs::find($id);
        $post->Title = $request->title;
        $post->Body = $request->body;
        $post->Author = $request->author;
        $post->save();
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blogs::find($id)->delete();
        return redirect()->route('blog.index');
    }

}
