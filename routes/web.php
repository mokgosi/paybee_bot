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

Route::get('/', 'TelegramController@getSendMessage');
Route::get('get-updates', 'TelegramController@getUpdates');
Route::get('send',  'TelegramController@getSendMessage');
Route::post('send', 'TelegramController@postSendMessage');
Route::get('bot-config', 'ConfigController@index')->name('bot-config');;
Route::post('update-config', 'ConfigController@updateConfig');