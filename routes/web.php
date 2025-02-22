<?php

use App\Http\Controllers\PostCController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Usecontroller;
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
    return view('souhail');
});

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/souhail', function (){
//     dd("souhail");
// });


Route::get('/a', [TestController::class, 'returnName']);

// Route::view('/ahmed', 'welcome');
// Route::redirect('/here', '/a');


// Route::get('/oop/{id?}', [TestController::class, 'sayMyname'])->where('name', '[0-9]+')->name('recherch');


// Route Group
Route::controller(TestController::class)->prefix('/rout')->name('test.')->group(function(){
    Route::get('/souhail/{id?}', 'sayMyname')->name('pagesouhail')->where('id', '[0-9]+');
    Route::get('/oop/{name?}', 'returnName')->name('names');
});

// Route::get('/invokable', [Usecontroller::class]);

// declarer les roussource


// ->except(['',''])
Route::resource('users', PostCController::class)->only(['index', 'create']);


