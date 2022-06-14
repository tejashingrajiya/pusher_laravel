<?php

use Illuminate\Support\Facades\Route;
use App\Events\FormSubmitted;
use App\Http\Controllers\ChatsController;


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

Route::get('/counter', function () {
    return view('counter');
});
Route::get('/sender', function () {
   return view('sender');
});
Route::post('/sender', function () {
	$text = request()->text;
	
	event (new FormSubmitted($text));
    echo"hell";
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 // Route::get('/', [App\Http\Controllers\ChatsController::class, 'index'])->name('index');
 // Route::get('messages', 'ChatsController@fetchMessages');
 // Route::post('messages', 'ChatsController@sendMessage');