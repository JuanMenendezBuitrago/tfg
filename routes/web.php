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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

///
/// Resources
///

Route::resource('school', 'SchoolController');
Route::resource('degree', 'DegreeController');
Route::resource('group', 'GroupController');
//Route::resource('user', 'UserController');
//Route::resource('course', 'CourseController');
Route::resource('level', 'LevelController');
// Route::resource('activity', 'ActivityController');
// Route::resource('point', 'PointController');
// Route::resource('incentive', 'IncentivesController');
// Route::resource('pointCategory', 'PointCategoryController');
// Route::resource('academicYear', 'AcademicYearController');
// Route::resource('file', 'FileController');

Auth::routes();

Route::get('/home', 'HomeController@index');
