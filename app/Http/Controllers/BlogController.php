<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blog;

    public function newBlog(Request $request)
    {
        Blog::createBlog($request);
        return redirect()->back()->with('message', 'Blog Created Successfully!');
    }

    public function editBlog($blogId)
    {
        $this->blog = Blog::find($blogId);
        return view('theme.edit-blog',['blog'=>$this->blog]);
    }

    public function updateBlog(Request $request)
    {
        Blog::updateBlog($request);
        return redirect('/manage-blog')->with('message', 'Blog Updated Successfully!');
    }

    public function deleteBlog($blogId)
    {
        $this->blog = Blog::find($blogId);
        if(file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }

        $this->blog->delete();
        return redirect()->back()->with('message', 'Blog Deleted Successfully!');
    }
}
