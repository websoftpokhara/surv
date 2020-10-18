<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\SiteController::class, 'getHome'])->name('getHome');
Route::post('/form', [App\Http\Controllers\SiteController::class, 'postAddRecord'])->name('postAddRecord');
Route::get('/form', [App\Http\Controllers\SiteController::class, 'getForm'])->name('getForm');
Route::get('/language/{language}', [App\Http\Controllers\SiteController::class, 'getLanguage'])->name('getLanguage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/record/manage', [App\Http\Controllers\HomeController::class, 'getRecordManage'])->name('getRecordManage');
