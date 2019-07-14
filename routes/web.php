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

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('isBanned')->name('home');


Route::group([
    'prefix' => 'goals',
    'middleware' => 'auth'
], function () {
    Route::get('/', 'GoalsController@index')->middleware('isBanned');

    Route::get('create', 'GoalsController@create')->middleware('isBanned');
    Route::post('create', 'GoalsController@store')->middleware('isBanned');

    Route::get('{goal}', 'GoalsController@show')->middleware('isBanned');
    Route::patch('{goal}', 'GoalsController@update')->middleware('isBanned');
    Route::delete('{goal}', 'GoalsController@destroy')->middleware('isBanned');

    Route::get('{goal}/edit', 'GoalsController@edit')->middleware('isBanned');


    Route::post('{goal}/tasks', 'GoalTasksController@store')->middleware('isBanned');
    Route::get('{goal}/tasks', function () {
        abort(404);
    });
});


Route::group([
    'prefix' => 'tasks',
    'middleware' => 'auth'
], function () {
    Route::patch('{task}', 'GoalTasksController@update')->middleware('isBanned');
    Route::delete('{task}', 'GoalTasksController@destroy')->middleware('isBanned');
    Route::get('{task}', function () {
        abort(404);
    });
});


Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {
    Route::get('goals', 'AdminGoalsController@index')->middleware('isAdmin');

    Route::get('goals/{goal}', 'AdminGoalsController@show')->middleware('isAdmin');
    Route::delete('goals/{goal}', 'AdminGoalsController@delete')->middleware('isAdmin');
    Route::patch('goals/{goal}', 'AdminGoalsController@update')->middleware('isAdmin');

    Route::get('goals/{goal}/edit', 'AdminGoalsController@edit')->middleware('isAdmin');



    Route::get('users', 'AdminUsersController@index')->middleware('isAdmin');
    Route::get('users/{user}/edit', 'AdminUsersController@edit')->middleware('isAdmin');

    Route::patch('users/{user}', 'AdminUsersController@update')->middleware('isAdmin');
    Route::delete('users/{user}', 'AdminUsersController@delete')->middleware('isAdmin');
    Route::get('users/{user}', function () {
        abort(404);
    });

    Route::patch('users/{user}/ban', 'AdminUsersController@banUser')->middleware('isAdmin');
    Route::get('users/{user}/ban', function () {
        abort(404);
    });
});
