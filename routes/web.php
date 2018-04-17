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
    return view('index');
});

Route::get('/student-project-request', function () {
    return view('student.request_project');
});
Route::get('/topics', function () {
    return view('student.topics');
});
Route::group(['prefix'=> 'admin','namespace' => 'admin'], function()
{
	Route::get('/', function(){
		return view ('admin.master');
	})->name ('dashboard');
	Route::resource('user','StudentController');
    Route::resource('media' ,'MediaController');
     Route::resource('trainer' ,'TrainerController');

	Route::get('/user/delete/{id}', 'StudentController@destroy');
    Route::get('/search-user', 'StudentController@search');
    Route::get('/media/delete/{id}', 'MediaController@destroy');
    Route::get('/trainer/delete/{id}', 'TrainerController@destroy');
    Route::get('/search-trainer', 'TrainerController@search');
});