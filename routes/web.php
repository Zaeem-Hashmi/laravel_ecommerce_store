<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::prefix('property')->middleware('auth')->group(function () {
   Route::get('/create',[PropertyController::class,'index']);
   Route::post('/store',[PropertyController::class,'store'])->name('ppt.add');
   Route::post('/update',[PropertyController::class,'update'])->name('ppt.update');
   Route::get('/delete/{id}',[PropertyController::class,'delete'])->name('ppt.delete');
   Route::get('/edit/{id}',[PropertyController::class,'edit'])->name('ppt.edit');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

