<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RoleManagerController;

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

Route::get('/', function () { return view('frontend.index');})->name('frontend.index');
Route::get('/blog', function () { return view('frontend.blog');})->name('frontend.blog');
Route::get('/why-us', function () { return view('frontend.why-us');})->name('frontend.whyus');
Route::get('/team', function () { return view('frontend.team');})->name('frontend.team');
Route::get('/client-reviews', function () { return view('frontend.client-reviews');})->name('frontend.client.reviews');
Route::get('/contact', function () { return view('frontend.contact');})->name('frontend.contact');
Route::get('/cart', function () { return view('frontend.cart');})->name('frontend.cart');
Route::get('/user-login', function () { return view('frontend.login');})->name('frontend.login');

Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('admin');

Route::controller(MemberController::class)->group(function(){
    Route::get('/admin/member/all', 'allUser')->name('admin.member.all');
    Route::get('/admin/member/new', 'create')->name('admin.member.new');
    Route::post('/admin/member/store', 'store')->name('admin.member.store');
});

Route::controller(RoleManagerController::class)->group(function(){
    Route::get('/admin/member/role', 'index')->name('admin.member.role');
    Route::post('/admin/role/new', 'store')->name('admin.role.store');
});
