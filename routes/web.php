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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes([
    'confirm' => false,
    'email' => false,
    'request' => false,
    'update' => false,
    'reset' => false
]);
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/books', 'BooksController@index')->name('books');
Route::get('books/create_book', 'BooksController@create')->name('view_create_book');
Route::post('books/create_book/to_create', 'BooksController@store')->name('create_book');
Route::get('books/edit_book', 'BooksController@edit')->name('view_edit_book');
Route::post('books/edit_book/to_update', 'BooksController@update')->name('edit_book');
Route::post('books/to_delete', 'BooksController@destroy')->name('delete_book');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
