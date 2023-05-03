<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    private $blog;
    public function index(){
        return view('backend.blog.add');
    }
    public function manage(){
        return view('backend.blog.manage',[
            'blogs'=>Blog::all()
        ]);
    }

    public function create(Request $request){
        Blog::createBlog($request);
        return back()->with('success','Successfully Create a new Blog');


    }

    public function edit($id){
        $this->blog=Blog::find($id);
        return view('backend.blog.edit',['blog'=>$this->blog]);
    }


    public function update(Request $request, $id){
        Blog::updateBlog($request, $id);
        return redirect()->route('blog.add')->with('success','successfully Updated the Blog');

    }

    public function delete($id){
        $this->blog =Blog::find($id);
        if (file_exists($this->blog->image)){
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->route('blog.add')->with('success','Successfully Deleted');

    }



}
