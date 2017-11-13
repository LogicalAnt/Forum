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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/threads', 'ThreadController@showAllThread');
Route::get('/threads/create', 'ThreadController@editorView')->middleware('auth');
Route::post('/threads/create', 'ThreadController@store')->middleware('auth');

Route::get('/threads/{thread}', 'ThreadController@showSingleThread');
Route::get('threads/{thread}/reply', 'ReplyController@show');
Route::post('threads/{thread}/reply', 'ReplyController@store');
Route::get('user/{user}', 'ReplyController@showUser');
Route::get('test2', function(){
	dd('hit');
});
Route::get('test', function(){
	return view('sidebar.test');
});
