<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\CkeditorController;
use App\Models\Blog;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('master', [ClientController::class, 'showCategory']);
Route::get('home', [ClientController::class, 'indexBlog'])->name('website.home');

// Đăng nhập và xử lý đăng nhập
Route::get('login', [ 'as' => 'login', 'uses' => 'App\Http\Controllers\Auth\LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'App\Http\Controllers\Auth\LoginController@postLogin']);

// Đăng ký thành viên
Route::get('register', 'App\Http\Controllers\Auth\RegisterController@getRegister');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@postRegister');

// Đăng xuất
Route::get('logout', [ 'as' => 'logout', 'uses' => 'App\Http\Controllers\Auth\LogoutController@getLogout']);

Route::any('/home_admin', 'App\Http\Controllers\AdminController@indexBlog')->name('homead');

Route::get('/add_blog',  [AdminController::class, 'addBlogView'] )->name('blog.admin_add');

Route::any('/add_admin/addblog',  [AdminController::class, 'addBlog','upload'] )->name('blog.admin_addhandle');

Route::any('/blog_details/{id}',[ClientController::class, 'showBlog'])->name('website.show_blog');

Route::any('/blog_delete/{id}',[AdminController::class, 'deleteBlog']);

Route::get('/category/{id}','App\Http\Controllers\ClientController@showCategoryBlog')->name('website.show_category');

Route::post('ckeditor/upload', [CkeditorController::class,'upload'])->name('ckeditor.upload');

Route::get('login-ad', [ 'as' => 'login-ad', 'uses' => 'App\Http\Controllers\Auth\LoginController@getLoginAd']);
Route::post('login-ad', [ 'as' => 'login-ad', 'uses' => 'App\Http\Controllers\Auth\LoginController@postLoginAd']);

Route::get('/scrapent', function() {
    $status = Artisan::call('scrape:nt');
    return '<h1>Configurations cache cleared</h1>';
});

Route::get('/scrapech', function() {
    $status = Artisan::call('scrape:ch');
    return '<h1>Configurations cache cleared</h1>';
});