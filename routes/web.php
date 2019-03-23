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

Route:: get('index', [
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'

]);

//Đăng ký tài khoản
Route::get('signup', 'PageController@getSignup');
Route::post('signup', 'PageController@postSignup');

//Đăng Nhập
Route::get('login', 'UserController@getLogin');
Route::post('login', 'UserController@postLogin');

//Đăng xuất
Route::get('log-out',[
	'as'=>'logout',
	'uses'=>'UserController@getLogout'
]);

// Khóa học theo loại
Route::get('course-by-category/{category}',[
	'as'=>'course',
	'uses'=>'PageController@getCourse'
]);

//chi tiết khoa học
Route::get('chi-tiet/{courseid}',[
	'as'=>'chitiet',
	'uses'=>'PageController@getChiTiet'
]);