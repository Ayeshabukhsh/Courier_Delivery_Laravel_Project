<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AgentdetailController;
use App\Http\Controllers\CourieragentController;
use App\Http\Controllers\QouteController;
use App\Http\Controllers\QoutationController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PfdController;







use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Themee
Route::get('/index', function () {
    return view('frontend.index');
});
//dropdown Elements
Route::get('/accourdions-tabs', function () {
    return view('frontend.accourdions-tabs');
});
Route::get('/typography', function () {
    return view('frontend.typography');
});
Route::get('/forms', function () {
    return view('frontend.forms');
});
Route::get('/table', function () {
    return view('frontend.table');
});
Route::get('/courier', function () {
    return view('frontend.courier');
});
Route::get('/bar', function () {
    return view('frontend.bar');
});
//pages dropdwon
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/our-team', function () {
    return view('frontend.our-team');
});
Route::get('/faq', function () {
    return view('frontend.faq');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/coming-soon', function () {
    return view('frontend.coming-soon');
});
//single page
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/blog-detail', function () {
    return view('frontend.blog-detail');
});
Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/service_details', function () {
    return view('frontend.service_details');
});
Route::get('/contactus', function () {
    return view('frontend.contactus');
});
Route::get('/BuyOne', function () {
    return view('frontend.BuyOne');
});

Route::get('/statuscount', function () {
    return view('admin.statuscount');
});
//Dashboard

Route::get('/dashboard', function () {
    return view('dashboard');
    
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard',function () {
    return view ('admin.dashboard');
})->middleware(['auth:admin','verified'])->name('admin.dashboard');

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin /profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
 
    //Courier Agent Crud Controller
    Route::resource('agent',AgentdetailController::class);


    //Courier Crud Controller
    Route::resource('courieragent',CourieragentController::class);

    //Qoute 
    Route::resource('qoute',QouteController::class);

    //Qoutation
    Route::resource('qoutation',QoutationController::class);


    //Contact
    Route::resource('contact',ContactController::class);
    
    //Forms
    Route::resource('form',FormController::class);

//Download Shiping
 Route::get('shiping',[PfdController::class,'index']);
 Route::get('export',[PfdController::class,'export']);




});

require __DIR__.'/adminauth.php';

