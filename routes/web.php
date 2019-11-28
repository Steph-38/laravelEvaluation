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
    return view('home');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

// Chiens
Route::get('/chiens', 'ChienController@show')->name('chiens');
Route::get('/chien/create', 'ChienController@create')->name('createDog');
Route::get('/chien/edit/{id}', 'ChienController@edit')->name('editDog');

// Races
Route::get('/races', 'RaceController@show')->name('races');
Route::get('/races/create', 'RaceController@create')->name('createRace');
Route::get('/race/edit/{id}', 'RaceController@edit')->name('editRace');




Route::middleware('auth')->group(function () {
    // Races
    Route::post('/race/store', 'RaceController@store')->name('storeRace');
    Route::post('/race/update/{id}', 'RaceController@update')->name('updateRace');
    Route::post('/race/delete/{id}', 'RaceController@delete')->name('deleteRace'); 

    // Dogs
    Route::post('/chien/store', 'ChienController@store')->name('storeDog');
    Route::post('/chien/update/{id}', 'ChienController@update')->name('updateDog');
    Route::post('/chien/delete/{id}', 'ChienController@delete')->name('deleteDog');
});
