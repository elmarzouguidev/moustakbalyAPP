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
    //  return view('welcome');

    $result = QueryBuilder::for(Inscription::class)
        ->allowedFilters(
            [
                'nomComplet',
                'email',
                AllowedFilter::scope('Aged'),
                AllowedFilter::exact('id')
            ]
        )
        ->allowedSorts(['nomComplet'])
        ->get();
    return $result;
});

Auth::routes();

Route::group(['prefix'=>'theadmin','middleware'=>'auth'],function(){

    Route::get('/',['uses'=>'DashController@index','as'=>'admin.dash']);

    Route::get('/inscriptions',['uses'=>'InscriptionController@index','as'=>'admin.inscriptions']);
});




