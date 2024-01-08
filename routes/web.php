<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,"index"])->name("home");
Route::get('/home',function (){
    return '<h1>Done</h1>';
})->name("home.page");
Route::post('/contact',[HomeController::class,"contactPost"])->name("contact.store");
