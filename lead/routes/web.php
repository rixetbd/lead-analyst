<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/contact', function () { return view('frontend.contact');})->name('frontend.contact');

Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('admin');
