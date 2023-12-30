<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\productController;
use App\Http\Controllers\FrontendController;
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

Route::get('admin/login', function () {
    return view('admin/login');
});




Route::get('/', function () {
    return view('home');
});
Route::middleware(['auth'])->group(function () {

Route::get('admin/index', function () {
    return view('admin/index');
});
});


Route::get('admin/singup', function () {
    return view('admin/singup');
});


Route::get('admin/header', function () {
    return view('admin/header');
});

Route::get('admin/user', function () {
    return view('admin/user');
});

Route::get('admin/userview', function () {
    return view('admin/userview');
});
Route::get('admin/Update', function () {
    return view('admin/Update');
});

Route::post('admin/user', [authController::class, 'user']);

Route::post('admin/singup', [authController::class, 'singup']);
Route::post('admin/login', [authController::class, 'login'])->name('login');

 

// form section
Route::get('admin/form', function () {
    return view('admin/form');
});

Route::get('admin/formview', function () {
    return view('admin/formview');
});
Route::post('admin/form', [WebsiteController::class, 'form']);

Route::get('admin/form', function () {
    return view('admin/form');
});

// home section



Route::get('admin/emailbox', function () {
    return view('admin/emailbox');
});

Route::get('admin/ChatBox', function () {
    return view('admin/ChatBox');
});

Route::get('admin/contactlist', function () {
    return view('admin/contactlist');
});

Route::get('admin/todolist', function () {
    return view('admin/todolist');
});

Route::get('admin/Calendar', function () {
    return view('admin/Calendar');
});

Route::get('admin/Graphical', function () {
    return view('admin/Graphical');
});



Route::get('admin/UserProfilep', function () {
    return view('admin/UserProfilep');
});


Route::get('admin/product', function () {
    return view('admin/product');
});

Route::get('admin/productview', function () {
    return view('admin/productview');
});


Route::post('admin/product', [productController::class, 'user']);

Route::get('admin/Productedit', function () {
    return view('admin/Productedit');
});

Route::get('admin/Productupdate/{id}', [productController::class, 'Productupdateq'])->name('Productupdateq');
Route::post('admin/Productupdate', [productController::class, 'Productupdate'])->name('Productupdate');







Route::get('admin/formedit/{id}', [WebsiteController::class, 'edit'])->name('edit');
Route::post('admin/formedit', [WebsiteController::class, 'update'])->name('update');


Route::get('admin/delete/{id}',[authController::class,'delete'])->name('delete');


Route::get('admin/deleteproduct/{id}',[productController::class,'deleteproduct'])->name('deleteproduct');


Route::get('admin/yourorde', function () {
    return view('admin/yourorde');
});


Route::get('admin/logo', function () {
    return view('admin/logo');
});

Route::get('admin/logoview', function () {
    return view('admin/logoview');
});

Route::post('admin/logo', [FrontendController::class, 'logo']);
Route::get('admin/logoedit/{id}', [FrontendController::class, 'logoedit'])->name('logoedit');
Route::post('admin/logoedit', [FrontendController::class, 'logoupdate'])->name('logoupdate');


// slidebar section
Route::get('admin/slider', function () {
    return view('admin/slider');
});

Route::get('admin/sliderview', function () {
    return view('admin/sliderview');
});

Route::post('admin/slider', [FrontendController::class, 'slider'])->name('slider');
Route::get('admin/slideredit/{id}', [FrontendController::class,'slideredit'])->name('slideredit');
Route::post('admin/slideredit', [FrontendController::class, 'sliderupdate'])->name('sliderupdate');


Route::get('admin/slideredit', function () {
    return view('admin/slideredit');
});
// home section
Route::get('home/index', function () {
    return view('home/index');
});



// service part
Route::get('admin/Servicesview', function () {
    return view('admin/Servicesview');
});
Route::get('admin/Services', function () {
    return view('admin/Services');
});
Route::post('admin/Services', [FrontendController::class, 'service'])->name('service');
Route::get('admin/servicesedit/{id}',[FrontendController::class,'servicesedit'])->name('servicesedit');
Route::post('admin/servicesedit',[FrontendController::class,'Serviceupdate'])->name('Serviceupdate');
Route::get('admin/deleteService/{id}',[FrontendController::class,'deleteService'])->name('deleteService');
// service part End

 






