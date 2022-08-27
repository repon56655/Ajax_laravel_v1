<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\EmployeeController;
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
Route::get('/',[ProductController::class,'home']);
// For Employee
Route::get('/addemployee',[EmployeeController::class,'index'])->name("addemployee");
Route::get('/showemployee',[EmployeeController::class,'show']);
Route::get('/deleteemployee/{id}',[EmployeeController::class,'destroy']);
Route::get('/editemployee/{id}',[EmployeeController::class,'edit']);
Route::post('/employeestore',[EmployeeController::class,'store']);
Route::post('/employeeupdate/{id}',[EmployeeController::class,'update']);

// for Product
Route::get('/addproduct',[ProductController::class,'addproduct'])->name("addproduct");
Route::post('/productStore',[ProductController::class,'productStore'])->name("productStore");
Route::get('/showproduct',[ProductController::class,'showproduct'])->name("showproduct");
Route::get('/editproduct/{id}',[ProductController::class,'editproduct'])->name("editproduct");
Route::post('/update/{id}',[ProductController::class,'update'])->name("update");
Route::get('/delete/{id}',[ProductController::class,'delete'])->name("delete");
Route::get('/status/{id}',[ProductController::class,'status'])->name("status");
// Route::get('/addproduct','App\Http\Controllers\Frontend\ProductController@addproduct')->name("addproduct");
// Route::get('/showproduct','App\Http\Controllers\Frontend\ProductController@showproduct')->name("showproduct");
// Route::post('/productstore','App\Http\Controllers\Frontend\ProductController@productstore')->name("productstore");

// Route::get('/about', function () {
//     return view('frontend/about');
// })->name("about");
