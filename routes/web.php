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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//route to show video by category
Route::get('/category/{id}', 'Frontend\CategoryController@index')->name('category');
//route to show video by skill
Route::get('/skill/{id}', 'Frontend\SkillController@index')->name('skill');
//route to show video by id
Route::get('/video/{id}', 'Frontend\VideoController@index')->name('video');
//route to add comment
Route::post('/comment', 'Frontend\VideoController@addComment')->name('addComment');
//route to edit comment
Route::post('/comment/{comment}', 'Frontend\VideoController@editComment')->name('comment');
//route to add contact us message
Route::post('/message', 'HomeController@message')->name('message');
//route of pages
Route::get('/pages/{page}', 'Frontend\PageController@index')->name('page');
//route of user profile
Route::get('/user/{user}', 'Frontend\UserController@index')->name('user.profile');
//route of update user profile
Route::post('/user/{user}/update', 'Frontend\UserController@update')->name('user.update');
