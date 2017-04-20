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

Route::get('/', function () {
    return view('landingpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('search', 'PublicController@search');
Route::get('bookinginitial/{building_id}/{tgl_sewa}/{waktu}', [
        'uses' => 'PublicController@bookinginitial',
        'as'   => 'bookinginitial'
      ]);
Route::post('booking', 'PublicController@booking');

Route::group(['middleware' => ['web']], function () {

    Route::get('/home', 'HomeController@index');
    //pelanggan
    Route::resource('building', 'BuildingController');
    Route::resource('customer', 'CostumerController');


    //report
    Route::get('transaction', 'TransactionController@index');







    Route::get('register', function() {
      return redirect('/');
    });
});
