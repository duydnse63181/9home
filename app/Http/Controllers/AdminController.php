<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use DB;
use Artisan;

class AdminController extends Controller
{

     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function admin(){
        return view('admin/home_admin');

    }

    public function indexBlog(){
        $data = Blog::paginate(6);
        return view('admin/home_admin',compact('data'));
    }

    public function addBlog(Request $request){
        $blog_des = $request->description;
        $blog_title = $request->name;

        // $request->image->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
    
        $blog_image = $request->image->getClientOriginalName();  
     
        $request->image->move(public_path('img'),  $blog_image);
        

        $blog_img = "img/".$blog_image;

        $blog_content = $request->content;

        $blog_cate = $request->category_id;

        $blog_new = new Blog;
        $blog_new->id;
        $blog_new->description = $blog_des;
        $blog_new->name = $blog_title;
        $blog_new->image = $blog_img;
        $blog_new->content = $blog_content;
        $blog_new->category_id = $blog_cate;

        $blog_new->save();
        return redirect('home_admin');
    }


    public function addBlogView(){
        $cate = Category::all();
        return view('admin/add_blog',["cate"=>$cate]);

    }

    public function deleteBlog($id){
        $blog_id = Blog::find($id);
        $blog_id->delete();
        return redirect('home_admin');
    }

    public function __construct() {
        $this->middleware('auth', ['except' => ['home']]);

    }

    public function download(){
        
    $path = 'https://noithattrevietnam.com/uploaded/2021/03/mau-phong-tho-dep%20%2814%29.jpg';
    $filename = basename($path);
    $name = str_replace('%','-',$filename);

    Image::make($path)->save(public_path('img/'.$name));
    return '<h1>Configurations cache cleared</h1>';
    }

    public function scch(){
        
        $status = Artisan::call('scrape:ch');
        return '<h1>Configurations cache cleared</h1>';
    }
}