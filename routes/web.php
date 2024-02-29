<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return ;
// });


Route::get('/', [HomeController::class,'index']);

Route::prefix('category') ->group(function(){
    Route::get('/food-beverage', [ProductController::class, 'foodbeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyhealth']);
    Route::get('/home-care', [ProductController::class, 'beautycare']);     
    Route::get('/baby-kid', [ProductController::class, 'babykid']);
});
