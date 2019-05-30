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
//    return view('welcome');
    return 'hello world';
});

Route::get('about',function(){
   return view('about');
});

//Route::get('/user/{id?}',function ($id = 1){
//    return "用户id: ".$id;
//})->middleware('token');

Route::get('/user/{id}','UserController@show');

Route::get('/single','ShowProfile');

Route::group(['middleware' => ['test']],function (){
    Route::get('/hello',function (){return 'hello world!';});
    Route::get('/world',function (){return 'hello world!';});
});

Route::get('/login',function(){
    return '登录页面';
});