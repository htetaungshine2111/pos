<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');

Route::resource('categories', CategoryController::class);
Route::get('category/delete/{id}', ['as' => 'category.delete', 'uses' => 'App\Http\Controllers\CategoryController@destroy']);

Route::resource('subcategory', SubCategoryController::class);
Route::get('subcategory/delete/{id}', ['as' => 'subcategory.delete', 'uses' => 'App\Http\Controllers\SubCategoryController@destroy']);
