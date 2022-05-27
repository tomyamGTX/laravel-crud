<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudInsertController;
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
Route::get('/',function(){
    return view('home');
});

Route::get('view','App\Http\Controllers\StudViewController@index');
Route::get('add',function(){
    return view('stud_create');
});

Route::get('insert','App\Http\Controllers\StudInsertController@insertform');
Route::post('create','App\Http\Controllers\StudInsertController@insert');

Route::post('stud_delete/{$user->id}','App\Http\Controllers\StudInsertController@destroy');
use App\Http\Controllers\ProductController;
 
Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index');
    Route::get('/product_create', 'create');
    Route::post('/product_create', 'store');
    Route::get('/product_edit/{product_id}','edit');
    Route::put('/product_update/{product_id}','update');
    Route::delete('/product_delete/{product_id}','destroy');
});