<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class ClientController extends Controller
{

     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function showBlog($id){
        $blog_by_id = Blog::find($id);
        $cate = Category::all();
        return view('details',["blog"=>$blog_by_id,"cate"=>$cate]);

        
    }

    public function showCategoryBlog($id){
        $blog = Blog::all();
        $cate_by_id = Category::find($id);
        $cate = Category::all();
        return view('category',["blog"=>$blog,"cate"=>$cate,"cate_by_id"=>$cate_by_id ]);
    }



    public function indexBlog(){
        $blog = Blog::all();
        $cate = Category::all();
        return view ('home',["blog"=>$blog,"cate"=>$cate]);
    }

  




}