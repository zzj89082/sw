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
// Route::group(['middleware'=>'login'],function(){

	//后台主页控制器
	Route::get('/admin/index','Admin\AdminController@index');

	//后台用户控制器
	// Route::resource('/admin/user','Admin\UserController');
	
	//后台回收站列表控制器
	Route::get('/admin/recover/list','Admin\RecoverController@list');
	//后台广告回收站恢复控制器
	Route::get('/admin/recover/update/{id}','Admin\RecoverController@update');
	//后台广告回收站删除控制器
	Route::get('/admin/recover/delete/{id}','Admin\RecoverController@delete');
	//后台轮播回收站恢复控制器
	Route::get('/admin/recover/rupdate/{id}','Admin\RecoverController@rupdate');
	//后台轮播回收站删除控制器
	Route::get('/admin/recover/rdelete/{id}','Admin\RecoverController@rdelete');

	// //网站配置
	// Route::controller('/admin/config','Admin\ConfigController');


	//网站配置
	Route::get('/admin/config/index','Admin\ConfigController@index');
	Route::post('/admin/config/add','Admin\ConfigController@add');
	//更换轮播图
	Route::get('/admin/config/rollimg','Admin\ConfigController@rollimg');
	Route::post('/admin/config/insertimg','Admin\ConfigController@insertimg');
	Route::get('/admin/config/delete/{id}','Admin\ConfigController@delete');

// });
