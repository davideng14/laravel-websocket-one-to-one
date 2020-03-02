<?php

use App\Events\MessageEvent;
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

Route::get('/users', function () {
    return Response::json(array(
        array( 'id' => 1, 'username' => 'user1' ),
        array( 'id' => 2, 'username' => 'user2' ),
        array( 'id' => 3, 'username' => 'user3' )
    ));
});

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/administrator', 'AdministratorController@index')->name('admin.home');
