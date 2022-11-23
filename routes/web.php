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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\XXX\AAAController;
Route::controller(AAAController::class)->group(function(){Route::get('XXX/AAAController','bbb');});


use App\Http\Controllers\Admin\profileControler;
Route::controller(profileController::class)->group(function(){Route::get('admin/profile/create','add');});
Route::controller(profileController::class)->group(function(){Route::get('admin/profile/edit','edit');});