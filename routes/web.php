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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('first');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/begin', function () {
    return view('first');
});

Route::post('/admin', function () {
    return view('template.index');
});

Route::get('/dashadmin', function () {
    return view('template.index');
});

Route::get('/user', function () {
    return view('template.indexuser');
});

// Route::get('/trans', function () {
//     return view('cashier.homecashier');
// });

// Route::post('/login', 'PosController@showMenu');
Route::get('/dashcashier', 'PosController@cashier');

// Route Menu
// Route Food
Route::get('/showMenu', 'PosController@showMenu');
Route::get('/show', 'PosController@show');
Route::post('/add', 'PosController@add_menu');
Route::get('/delete/{id}', 'PosController@delete_menu');
Route::get('/edit/{id}', 'PosController@edit_menu');
Route::put('/update/{id}', 'PosController@update_menu');
Route::get('/upload', 'PosController@upload');
Route::post('/upload/proses', 'PosController@proses_upload');
Route::get('/cetakmenu', 'PosController@cetak_pdf');

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
