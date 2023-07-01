<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\adminpostController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("adminhome",[adminController::class,"adminhome"])->name("adminhome");
Route::get("admincategory",[adminController::class,"admincategory"])->name("admincategory");
Route::get('newsform',[adminController::class,'newsform'])->name('newsform');

Route::post('postcategory',[adminpostController::class,'postcategory'])->name('postcategory');


Route::post('postnews',[adminpostController::class,'postnews'])->name('postnews');
Route::get("deletcat/{id}",[adminpostController::class,"deletcat"])->name("deletcat");

