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
/**微信菜单管理*/
Route::prefix('wx_menu')->group(function () {
    Route::any('/index','admin\Wx_menu@index');
    Route::get('/create','admin\Wx_menu@create');
    Route::any('/store','admin\Wx_menu@store');
});
