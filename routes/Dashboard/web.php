<?php
use Illuminate\Support\Facades\Route;




//dashboard routes
route::prefix('Dashboard')->middleware('admin')->group(function (){
//home page routs
    route::get('home','HomeController@index')->name('Dashboard/home');
    //users routes
    route::resource('users','UserController')->except('show');
    //categories routs
    route::resource('categories','CategoryController')->except('show');
//    skills rout
    route::resource('skills','skillController')->except('show');
    //    tags rout
    route::resource('tags','TagController')->except('show');
    //    pages rout
    route::resource('pages','PageController')->except('show');
    //    video rout
    route::resource('videos','VideoController')->except('show');
    //add comment rout
    route::post('comments','VideoController@storeComment')->name('comments.store');
    //delete comment rout
    route::post('comments/{comment}/destroy','VideoController@destroyComment')->name('comments.destroy');
    //update comment rout
    route::post('comments/{comment}/update','VideoController@updateComment')->name('comments.update');
    //show messages from contact us form
    route::get('messages','MessageController@index')->name('messages.index');
    //edit messages
    route::get('messages/{message}/edit','MessageController@edit')->name('messages.edit');
    //delete message
    route::post('message/{message}/destroy','MessageController@edit')->name('message.destroy');
    //delete message
    route::post('replayMessage/{id}','MessageController@replayMessage')->name('message.replay');
});

