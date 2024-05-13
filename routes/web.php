<?php

use App\Http\Controllers\HapeController;
use App\Models\Hape;
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

Route::get('/table',[HapeController::class,'index']);
Route::get('/input',[HapeController::class,'create']);
Route::post('/store',[HapeController::class,'store']);
Route::get('/{id}/edit',[HapeController::class,'edit']);
Route::put('update/{id}',[HapeController::class,'update']);
Route::delete('/update/{id}',[HapeController::class,'destroy']);
