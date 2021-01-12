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

//global middleware routing
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view("user","users");
// Route::view('noaccesspage','noaccess');


//group middleware routing
Route::view("check","check");
Route::view("user","users");
Route::view('noaccesspage','noaccess');

Route::group(['middleware'=>['protectPage']],function(){
    Route::view('user','users');
    Route::get('/', function () {
        return view('welcome');
    });
    
});
