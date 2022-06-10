<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Http\Controllers\Controller;
Route::get('speakers/{id}','speakerController@index')->name('speaker');
Route::get('speaker/create/{id} ','speakerController@create')->name('CreateSpeaker');
Route::post('speaker/create','speakerController@store');
Route::get('speaker/edit/{id} ','speakerController@edit')->name('EditSpeaker');
Route::get('speaker/delete/{id} ','speakerController@destroy')->name('DeleteSpeaker');
Route::put('speaker/update/{id}','speakerController@update')->name('updateSpeaker');
Route::get('event','EventController@index')->name('event');
Route::put('event/update/{id}','EventController@update')->name('updateEvent');
Route::get('event/create','EventController@create');
Route::post('event/create','EventController@store');
Route::get('event/edit/{id} ','EventController@edit')->name('EditEvent');
Route::get('event/delete/{id} ','EventController@destroy')->name('DeleteEvent');
route::get('index','homeController@home');
Route::get('alumni','alumniController@index')->middleware('auth');
Route::get('alumni/view/{id} ','alumniController@show')->name('viewAlumni')->middleware('auth');
Route::get('alumni/create','alumniController@game');
Route::get('alumni/create/{id} ','alumniController@create')->name('CreateAlumni');
Route::post('alumni/create','alumniController@store');
Route::auth();
Route::get('/dashboard', 'homeController@index');
Route::get('/logout', 'homeController@logout');
Route::get('schedule/{id}','scheduleController@index')->name('schedule');
Route::get('schedule/create/{id} ','scheduleController@create')->name('CreateSchedule');
Route::post('schedule/create','scheduleController@store');
Route::get('schedule/edit/{id} ','scheduleController@edit')->name('EditSchedule');
Route::get('schedule/delete/{id} ','scheduleController@destroy')->name('DeleteSchedule');
Route::put('schedule/update/{id}','scheduleController@update')->name('updateSchedule');
Route::get('/','homeController@home')->name('home');
Route::get('/search','homeController@search');