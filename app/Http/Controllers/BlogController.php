<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'img'=>'required',
            'content'=>'required'
            ]);               

            $blog = new Blog;
            $blog->title = $request->input('title');
            $blog->content = $request->input('content');
            if($request->file('img')){
                $img = $request->file('img');
                $imgName = time().'.'.$img->extension();
                $imgPath = 'img/';
                Storage::putFileAs('public/'.$imgPath, $img, $imgName);
                $blog->img = $imgPath.$imgName;
            }

            $blog->save();
            return redirect('/blogs')->with('status','Blog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    { 
        return view('blogs.edit', compact('blog'));
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
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title'=>'required',
            'img'=>'required',
            'content'=>'required'
            ]);

            $blog->title = $request->input('title');
            $blog->content = $request->input('content');

            if ($request->file('img')) {
                if ($blog->img) {
                    Storage::delete('public/'.$blog->img);
                }
    
                $img = $request->file('img');
                $imgName = time().'.'.$img->extension();
                $imgPath = 'img/';
                Storage::putFileAs('public/'.$imgPath, $img, $imgName);
                $blog->img = $imgPath.$imgName;
            }
    
            $blog->save();
            return redirect('/blogs')->with('status', 'Great! Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->img) {
            Storage::delete('public/'.$blog->img);
        }

        $blog->delete();
        return redirect('/blogs')->with('status', 'Blog removed successfully');
    }
}
