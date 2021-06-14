<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

/* Route::get('/', function () { */
/*     return view('home'); */
/* }); */

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/loop', [PagesController::class, 'loop']);

/* Route::resource('/posts', [PostController::class]); */
Route::resource('/posts', PostController::class);

Route::resource('/cars', CarController::class);

/* Route::get('/products', [ProductController::class, 'index'])->name('products'); */

/* Route::get('/products', [ProductController::class, 'index']); */
/* Route::get('/products/{name}', [ProductController::class, 'show'])->where('name', '[a-zA-Z]+'); */
/* Route::get('/products/{name}/{id}', [ProductController::class, 'show'])->where([ */
/*   'name' => '[a-zA-Z]+', */
/*   'id' => '[0-9]+' */
/* ]); */
/* Route::get('/products/about', [ProductController::class, 'about']); */

/* Route::get('/products', 'App\Http\Controllers\ProductController@index'); */

/* Route::get('/users', function () { */
/*   return 'Welcome to the users page!'; */
/* }); */

/* Route::get('/users', function () { */
/*   return [ */
/*     'Raven', */
/*     'Laravel' */
/*   ]; */
/* }); */

/* Route::get('/users', function () { */
/*   return response()->json([ */
/*     'name' => 'Raven', */
/*     'course' => 'Laravel Beginners to Advance' */
/*   ]); */
/* }); */

/* Route::get('/users', function () { */
/*   return redirect('/'); */
/* }); */
