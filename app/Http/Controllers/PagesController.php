<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class PagesController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('index', compact('blogs'));
    }
    
    public function about()
    {
        return view('about');
    }

    public function life()
    {
        return view('life');
    }
}
