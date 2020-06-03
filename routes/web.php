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
    return view('welcome');
});

Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
 
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::post('/price', 'SessionsController@price');
Route::post('/asc/price', 'SessionsController@priceAsc');
Route::post('/asc/type', 'SessionsController@typeAsc');
Route::post('/type', 'SessionsController@type');
Route::resource('student', 'StudentController');

Route::resource('product', 'ProductController');
