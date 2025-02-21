<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemController;
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

Route::get('/users', function(){
    return view('users');
});

Route::get('/mx', function(){

    // return view('dashboard.admin', ['numbers' => $data]);
    return view('index');
});

// test
// Route::get('/index', function(){
//     $data = ['1','3','3'];

//     // return view('dashboard.admin', ['numbers' => $data]);
//     return view('dashboard.admin', compact('data'));
// });

// Route ThemController

Route::controller(ThemController::class)->group(function(){
    Route::get('/show', 'show');
    Route::get('/users', 'users');
});


Route::controller(AdminController::class)->group(function(){
    Route::get('admin/users', 'users');
    Route::get('admin/events', 'events');
});
