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

Route::get('/course', function () {
    return view('student.course');
});

Route::get('/forms', function () {
    return view('student.forms');
});

Route::get('/project-ref', function () {
    return view('student.project_ref');
});

Route::get('/student-project-requesr', function () {
    return view('student.student_project_request');
});

Route::get('/student-projects', function () {
    return view('student.student_project');
});

Route::get('/topics', function () {
    return view('student.topics');
});
