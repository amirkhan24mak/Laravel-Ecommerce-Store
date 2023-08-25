<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\AllCatagery;
use App\Http\Controllers\SecandCatagery;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThirdController;




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

Route::get('/error', function () {
    return view('error');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/Shop', function () {
    return view('shop');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});


// Home

Route::get('/',[HomeController::class,'home']);


// Home



//website contact
Route::get('/contact',[ContactusController::class,'contactus']);
Route::post('/contact/store',[ContactusController::class ,"store"]);
Route::get('/dashobard/massages',[ContactusController::class,'list']);
Route::get('/dashobard/massages/{id}',[ContactusController::class,'msg_delete']);

//website contact

// mainCatagery
Route::get('/dashboard/maincatagery',[AllCatagery::class,'addmaincata']);
Route::post('/dashboard/maincatagery/store',[AllCatagery::class ,"store"]);
Route::get('/dashboard/maincatagery/list',[AllCatagery::class,'list']);
Route::get('/dashboard/maincatagery/list/{id}',[AllCatagery::class,'mcata_delete']);
// mainCatagery

//  2catagery
Route::get('/dashboard/catagery',[SecandCatagery::class,'catatwo']);
Route::post('/dashboard/catagery/store',[SecandCatagery::class ,"catatwostore"]);
Route::get('/dashboard/catagery/list',[SecandCatagery::class,'list']);
Route::get('/dashboard/catagery/list/{id}',[SecandCatagery::class,'scata_delete']);

//  2catagery

//  2catagery
Route::get('/dashboard/subcatagery',[ThirdController::class,'catatwo']);
Route::post('/dashboard/subcatagery/store',[ThirdController::class ,"catatwostore"]);
Route::get('/dashboard/subcatagery/list',[ThirdController::class,'list']);
Route::get('/dashboard/subcatagery/list/{id}',[ThirdController::class,'scata_delete']);

//  2catagery
