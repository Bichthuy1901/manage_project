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


Route::group(['prefix'=> 'admin','namespace' => 'admin'], function()
{
	Route::get('/', function(){
		return view ('admin.master');
	})->name ('dashboard');
    Route::resource('student','StudentController');
    Route::get('/student/delete/{id}', 'StudentController@destroy');
    Route::get('/search-student', 'StudentController@search');

    Route::resource('media' ,'MediaController');
    Route::get('/media/delete/{id}', 'MediaController@destroy');

    Route::resource('trainer' ,'TrainerController');
    Route::get('/trainer/delete/{id}', 'TrainerController@destroy');
    Route::get('/search-trainer', 'TrainerController@search');
});

Route::group(['namespace' => 'Student', 'middleware' => 'student'], function()
{
    Route::get('/student-project-request', 'ProjectController@create')->name('student.project_request.create');
    Route::post('/student-project-request', 'ProjectController@store')->name('student.project_request.store');

    Route::get('/topics', function () {
        return view('student.topics');
    })->name('student.topic');
});

Route::group(['prefix'=> 'trainer','namespace' => 'Trainer'], function()
{
    Route::get('/student-project-request', 'ProjectController@index')->name('trainer.project_request.index');
});
Auth::routes();
