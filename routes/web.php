<?php

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


<<<<<<< HEAD

=======
>>>>>>> 4e956ff3373bc8bd466cbbbd1d991c759032ea5f
Route::get('/', function () {
    return view('/home');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
