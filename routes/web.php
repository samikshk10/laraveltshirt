<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\outdoorController;

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

Route::get('/',[outdoorController::class,'index']);
Route::get('/additem',[outdoorController::class,'additems']);
Route::post('additem',[outdoorController::class,'additems'])->name('additembtn');
Route::post('saveitem',[outdoorController::class,'saveitems'])->name('saveCrud');
Route::get('delete/{id}',[outdoorController::class,'deleteitems']);
Route::get('edit/{id}',[outdoorController::class,'edititems']);
Route::post('/edit',[outdoorController::class,'updateitems'])->name('updateCrud');