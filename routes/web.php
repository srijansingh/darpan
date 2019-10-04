<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|-----
| Here is where you can register web routes for your application. These
| routes---------------------------------------------------------------------
| are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\SingleEventController;

Route::resource('/', 'UserController');

Route::get('/single', function () {
    return view('main.single');
});

Route::resource('/darpans','SingleEventController');

Route::resource('/register','GuestController');

//Route::resource('/office','OfficialController@index');
Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/event','EventController');

    Route::resource('/sponsor','SponserController');


    Route::resource('/media','MediaLinkController');

    Route::resource('/student','StudentController');
});




