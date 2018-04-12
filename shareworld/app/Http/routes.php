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

/*Route::get('/', function () {
    return view('welcome');
});*/

//前台
// Route::resource('/','Home\HomeController');


//后台路由组，对后台路由进行统一管理
Route::group(['middleware'=>'header'],function(){

	//后台主页控制器
	Route::get('/admin/index','Admin\AdminController@index');

	//后台用户控制器
	// Route::resource('/admin/user','Admin\UserController');

	//后台广告控制器
	Route::resource('/admin/poster','Admin\PosterController');

	//后台处理反馈控制器
	Route::resource('/admin/feedback','Admin\FeedbackController');

});
