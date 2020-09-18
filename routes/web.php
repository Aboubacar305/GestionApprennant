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
    return view('index');
});

Route::get('index','ApprenantsController@index')->name('index_apprenant');

Route::get('apprenant','ApprenantsController@create')->name('create_apprenant');

Route::post('apprenant','ApprenantsController@store')->name('store_apprenant');

Route::delete('apprenant/{apprenant}','ApprenantsController@destroy')->name('delete_apprenant');

Route::get('apprenant/detail/{apprenant}','ApprenantsController@show')->name('show_apprenant');

Route::get('apprenant/{apprenant}','ApprenantsController@edit')->name('edit_apprenant');

Route::put('apprenant/{apprenant}','ApprenantsController@update')->name('update_apprenant');