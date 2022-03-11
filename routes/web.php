<?php

/*use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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



//Product Image CRUD

Route::get('product',[App\Http\Controllers\UploadController::class, 'index']);












Auth::routes();


Route::get('/', function () {
    if(Auth::check()){return Redirect::to('home');}
    return view('index');})->name('index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'userdashboard'])->name('userdashboard');

Route::group(['prefix' => 'home','middleware' => 'auth'], function () {

    //
        Route::post('setting', [App\Http\Controllers\UploadController::class, 'store']);
        //Route::get('stock', [App\Http\Controllers\HomeController::class, 'stockview'])->name('stockview');
        Route::get('finance', function () {return view('dashboard.finance');})->name('financeview');
        Route::get('task', function () {return view('dashboard.task');})->name('taskview');
        Route::get('user', function () {return view('dashboard.user');})->name('userview');
        Route::get('personnel', function () {return view('dashboard.personnel');})->name('personnelview');
        Route::get('config', function () {return view('dashboard.config');})->name('config');
        Route::get('addproduct', function () {return view('dashboard.addproduct');})->name('addproduct');
        Route::get('loadproduct', [ProductController::class, 'saveproduct'])->name('stockview');


});

//logout route
Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('userlogout');


//Admin routes
/*
Route::get('admin/login',[App\Http\Controllers\Auth\AdminAuthController::class, 'getLogin'])->name('adminLogin');
Route::post('admin/login', [App\Http\Controllers\Auth\AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
Route::get('admin/logout', [App\Http\Controllers\Auth\AdminAuthController::class, 'logout'])->name('adminLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
    // Admin Dashboard
    Route::get('dashboard',[App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');  
});*/