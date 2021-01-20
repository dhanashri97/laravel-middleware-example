<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer;
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


Route::get('/', function () {
         return view('welcome');
    });
        

//global middleware routing
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view("user","users");
// Route::view('noaccesspage','noaccess');


//group middleware routing
// Route::view("check","check");
// Route::view("user","users");
// Route::view('noaccesspage','noaccess');

// Route::group(['middleware'=>['protectPage']],function(){
//     Route::view('user','users');
//     Route::get('/', function () {
//         return view('welcome');
//     });
    
// });

// Route::get("/customer",[Customer::class,'index']);

Route::view("login","home");

//post method
 Route::POST("/home",[HomeController::class,'testRequest']);


//put method
Route::PUT("/home",[HomeController::class,'testRequest']);

//delete method
Route::DELETE("/home",[HomeController::class,'testRequest']);