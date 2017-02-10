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

use EloquentORM\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    'as'    => 'home',
    'uses'  => 'PagesController@home'
]);

Route::get('/all', [
    'as'    => 'all',
    'uses'  => 'QueryController@eloquentAll'
]);

Route::get('/get/{gender}', [
    'as'    => 'get',
    'uses'  => 'QueryController@eloquentGet'
]);


Route::get('/get-custom', [
    'as'    => 'get-custom',
    'uses'  => 'QueryController@eloquentGetCustom'
]);
