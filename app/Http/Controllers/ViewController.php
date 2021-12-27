<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    protected $blogs;

    public function home()
    {
        $this->blogs = Blog::all();
        return view('theme.home-pages.index', ['blogs' => $this->blogs]);
    }

    public function addBlog()
    {
        return view('theme.add-blog');
    }

    public function manageBlog()
    {
        $this->blogs = Blog::all();
        return view('theme.manage-blog', ['blogs' => $this->blogs]);
    }
}
