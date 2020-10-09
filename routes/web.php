<?php

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

Route::get('/books', 'BooksController@index');

Route::get('/books/create', 'BooksController@create');

Route::post('/books/store','BooksController@store');

Route::get('/books/edit/{id}','BooksController@edit');

Route::post('/books/update','BooksController@update');

Route::get('/books/destroy/{id}', 'BooksController@destroy');

// Route::get('/about', function () {
//     return view('templates/about');
// });
 
// // Route::get('/books', function () {
// //     return view('templates/books');
// // });

// Route::get('/edit', function () {
//     return view('templates/edit');
// });
 
// Route::get('/create', function () {
//     return view('templates/create');
//  });