<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[AdminController::class,'front']);
Route::get('admin/login',[AdminController::class,'login']);
Route::post('admin/login_submit',[AdminController::class,'login_submit']);
Route::get('/admin/logout', function () {
     if(session()->has('admin_login')){
             session()->forget('admin_login');
             session()->forget('admin_id');

     }else{
        session()->flash('msg','Acess Denied');
     	return redirect('admin/login'); 
     }
       session()->flash('msg','logout sucessfully');

     return redirect('admin/login');
});
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/homepage',[AdminController::class,'banner']);
Route::post('/admin/banner_submit',[AdminController::class,'banner_submit']);
Route::get('/admin/about',[AdminController::class,'about']);
Route::post('/admin/about_submit',[AdminController::class,'about_submit']);
Route::get('/admin/project',[AdminController::class,'project']);
Route::post('/admin/project_submit',[AdminController::class,'project_submit']);




Route::get('/about',[AboutController::class,'index']);
Route::get('/services',[PortfolioController::class,'services']);
Route::get('/portfolio',[PortfolioController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::view('/contact','front/contact');
Route::post('/contact_submit',[ContactController::class,'contact_submit']);


