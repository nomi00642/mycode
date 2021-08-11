<?php
//use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\CatagoryController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
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
route::get('/index',[FrontendController::class,'index']);
route::get('/Frontend-category',[FrontendController::class,'category']);
route::get('/view-catagory/{slug}',[FrontendController::class,'viewcatagory']);
route::get('/catagory/{slug}/{pro_slug}',[FrontendController::class,'viewproduct']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','isAdmin'])->group(function(){

    //Route::get('/dashboard','admin\FrontendController@index'); 
    //Route::get('/dashboard','admin\CatagoryController@index'); 
    route::get('/dashboard','admin\FrontendController@index');
    route::get('/catagorys','admin\CatagoryController@index');
    route::get('/add','admin\CatagoryController@add');
   
    route::post('/insert-catagory','admin\CatagoryController@insert');
    route::get('/catagory-edit/{id}',[CatagoryController::class,'edit'])->name('catagory-edit');
    route::post('/catagory-update/{id}',[CatagoryController::class,'update'])->name('catagory-update');
    route::get('/catagory-delete/{id}',[CatagoryController::class,'destroy'])->name('catagory-delete');
//Product routs start

    route::get('/product',[ProductController::class,'show'])->name('product');
    route::get('/product-add',[ProductController::class,'add'])->name('product-add');
    route::post('/product-insert',[ProductController::class,'insert'])->name('product-insert');
    route::get('/product-edit/{id}',[ProductController::class,'edit'])->name('product-edit');
    route::post('/product-update/{id}',[ProductController::class,'update'])->name('product-update');
    route::get('/product-delete/{id}',[ProductController::class,'destroy'])->name('product-delete');
    });

    /////// intrest route start
    route::get('/icon-list',[IconController::class,'index'])->name('icon-list');
    route::get('/icon-create',[IconController::class,'add'])->name('icon-create');
    route::post('/icon-store',[IconController::class,'store'])->name('icon-store');
    route::get('/icon-edit/{id}',[IconController::class,'edit'])->name('icon-edit');
    route::post('/icon-update',[IconController::class,'update'])->name('icon-update');
    route::get('/icon-delete/{id}',[IconController::class,'destroy'])->name('icon-delete');
    ////////  intrest route end
