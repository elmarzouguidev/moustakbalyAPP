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

Route::get('/',['uses'=>'SiteController@index','as'=>'home']);

Auth::routes();

Route::group(['prefix'=>'theadmin','middleware'=>'auth'],function(){

    Route::get('/',['uses'=>'DashController@index','as'=>'admin.dash']);

    Route::get('/inscriptions',['uses'=>'InscriptionController@index','as'=>'admin.inscriptions']);
    Route::get('/inscriptions/export',['uses'=>'InscriptionController@export','as'=>'admin.export']);

    Route::get('/users',['uses'=>'UserController@index','as'=>'admin.users']);
    Route::post('/users',['uses'=>'UserController@store','as'=>'admin.users.add']);


    Route::get('/roles',['uses'=>'RoleController@index','as'=>'admin.role']);
    Route::post('/roles',['uses'=>'RoleController@store','as'=>'admin.role']);

    Route::get('/dataClear',['uses'=>'appController@dataClear','as'=>'admin.dataClear']);

    Route::get('appcache', function () {

        \Artisan::call('config:cache');
	
    });
});




