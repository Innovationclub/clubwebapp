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

Route::get('/', function () {
    return view('/home');
});


=======
>>>>>>> 0392061c224028531dec46217cd55b92787243c3
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
