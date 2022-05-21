<?php

use App\Models\Award;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);
Route::get('/blog/{id}', function ($id) {
    $blog=Blog::find($id);
    $categories=Category::all();
    return view('frontend.blog',compact('categories','blog'));
})->name('single_blog');
Route::get('/news/{id}', function ($id) {
    $news=News::find($id);
    $categories=Category::all();
    return view('frontend.news_single',compact('categories','news'));
})->name('single_news');
Route::get('/', function () {
    $sliders= Slider::all();
    $awards= Award::all();
    $certificates= Certificate::all();
    $news=News::all();
    $blogs=Blog::all();
    $categories=Category::all();
    return view('welcome',compact('sliders','awards','certificates','categories','news','blogs'));
});
Route::get('/about', function () {
    $categories=Category::all();
    return view('frontend.about',compact('categories'));
});
Route::get('/f/contact', function () {
    $categories=Category::all();
    return view('frontend.contact',compact('categories'));
});
Route::get('/f/news', function () {
    $news=News::all();
    $categories=Category::all();
    return view('frontend.news',compact('categories','news'));
});
Route::get('/f/blogs', function () {
    $categories=Category::all();
    $blogs=Blog::all();
    return view('frontend.blogs',compact('categories','blogs'));
});

Route::get('/f/awards', function () {
    $categories=Category::all();
    return view('frontend.awards',compact('categories'));
});
Route::get('/f/certificates', function () {
    $categories=Category::all();
    return view('frontend.awards',compact('categories'));
});


//category blog and news
Route::get('/blog/category/{id}', function($id){
    $categories=Category::all();
    $category=Category::find($id);
    $blogs= $category->blogs;
    return view('frontend.cblog',compact('blogs','categories','category'));
})->name('blogByCat');

Route::get('/news/category/{id}',function($id){
    $categories=Category::all();
    $category=Category::find($id);
    $bbc= $category->news;
    return view('frontend.cnews',compact('bbc','categories','category'));
})->name('newsByCat');


// backend routes
Route::get('/categories',[App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/sliders',[App\Http\Controllers\SliderController::class, 'index']);
Route::get('/certificates',[App\Http\Controllers\CertificateController::class, 'index']);
Route::get('/awards',[App\Http\Controllers\AwardController::class, 'index']);
Route::get('/allnews',[App\Http\Controllers\NewsController::class, 'index']);
Route::get('/admins',[App\Http\Controllers\AdminController::class, 'index']);
Route::get('/blogs',[App\Http\Controllers\BlogController::class, 'index']);
Auth::routes();



//category
Route::get('category',[App\Http\Controllers\CategoryController::class, 'create']);
Route::post('create/category',[App\Http\Controllers\CategoryController::class, 'store'])->name('cat.store');
Route::get('category/edit/{id}',[App\Http\Controllers\CategoryController::class, 'edit'])->name('cat.edit');
Route::put('category/update/{id}',[App\Http\Controllers\CategoryController::class, 'update'])->name('cat.update');
Route::get('category/delete/{id}',[App\Http\Controllers\CategoryController::class, 'delete'])->name('cat.del');


//sliders
Route::get('slider',[App\Http\Controllers\SliderController::class, 'create']);
Route::post('create/slider',[App\Http\Controllers\SliderController::class, 'store'])->name('sld.store');
Route::get('slider/edit/{id}',[App\Http\Controllers\SliderController::class, 'edit'])->name('sld.edit');
Route::put('slider/update/{id}',[App\Http\Controllers\SliderController::class, 'update'])->name('sld.update');
Route::get('slider/delete/{id}',[App\Http\Controllers\SliderController::class, 'delete'])->name('sld.del');



//certificates
Route::get('certificate',[App\Http\Controllers\CertificateController::class, 'create']);
Route::post('create/certificate',[App\Http\Controllers\CertificateController::class, 'store'])->name('ct.store');
Route::get('certificate/edit/{id}',[App\Http\Controllers\CertificateController::class, 'edit'])->name('ct.edit');
Route::put('certificate/update/{id}',[App\Http\Controllers\CertificateController::class, 'update'])->name('ct.update');
Route::get('certificate/delete/{id}',[App\Http\Controllers\CertificateController::class, 'delete'])->name('ct.del');


//awards
Route::get('award',[App\Http\Controllers\AwardController::class, 'create']);
Route::post('create/award',[App\Http\Controllers\AwardController::class, 'store'])->name('ad.store');
Route::get('award/edit/{id}',[App\Http\Controllers\AwardController::class, 'edit'])->name('ad.edit');
Route::put('award/update/{id}',[App\Http\Controllers\AwardController::class, 'update'])->name('ad.update');
Route::get('award/delete/{id}',[App\Http\Controllers\AwardController::class, 'delete'])->name('ad.del');

//news
Route::get('news',[App\Http\Controllers\NewsController::class, 'create']);
Route::post('create/news',[App\Http\Controllers\NewsController::class, 'store'])->name('ns.store');
Route::get('news/edit/{id}',[App\Http\Controllers\NewsController::class, 'edit'])->name('ns.edit');
Route::put('news/update/{id}',[App\Http\Controllers\NewsController::class, 'update'])->name('ns.update');
Route::get('news/delete/{id}',[App\Http\Controllers\NewsController::class, 'delete'])->name('ns.del');


//blog

Route::get('blog',[App\Http\Controllers\BlogController::class, 'create']);
Route::post('create/blog',[App\Http\Controllers\BlogController::class, 'store'])->name('bl.store');
Route::get('blog/edit/{id}',[App\Http\Controllers\BlogController::class, 'edit'])->name('bl.edit');
Route::put('blog/update/{id}',[App\Http\Controllers\BlogController::class, 'update'])->name('bl.update');
Route::get('blog/delete/{id}',[App\Http\Controllers\BlogController::class, 'delete'])->name('bl.del');


//admins
Route::get('admin',[App\Http\Controllers\AdminController::class, 'create']);
Route::post('create/admin',[App\Http\Controllers\AdminController::class, 'store'])->name('adm.store');
Route::get('admin/edit/{id}',[App\Http\Controllers\AdminController::class, 'edit'])->name('adm.edit');
Route::put('admin/update/{id}',[App\Http\Controllers\AdminController::class, 'update'])->name('adm.update');
Route::get('admin/delete/{id}',[App\Http\Controllers\AdminController::class, 'delete'])->name('adm.del');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
