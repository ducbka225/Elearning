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

//comment khóa học\
Route::post('comment_course/{course_id}', 'CommentController@postCommentCourse');

Route::post('comment_lesson/{lesson_id}', 'CommentController@postCommentLesson');

// bài học đầu tiên
Route::get('lessonfirst/{course_id}',[
	'as'=>'lessonfirst',
	'uses'=>'PageController@getLessonFirst'
]);

Route::get('lesson/{lesson_id}',[
	'as'=>'lesson',
	'uses'=>'PageController@getLesson'
]);

// bài tập
Route::get('ex1/{lesson_id}',[
	'as'=>'ex1',
	'uses'=>'BaiTapController@getEx1'
]);

Route::get('ex1byid/{ex1_id}/{number}/{count}',[
	'as'=>'ex1byid',
	'uses'=>'BaiTapController@getEx1ById'
]);

Route::get('ex2/{lesson_id}',[
	'as'=>'ex2',
	'uses'=>'BaiTapController@getEx2'
]);

Route::get('ex2byid/{ex2_id}/{number}/{count}',[
	'as'=>'ex2byid',
	'uses'=>'BaiTapController@getEx2ById'
]);

Route::get('ex3/{lesson_id}',[
	'as'=>'ex3',
	'uses'=>'BaiTapController@getEx3'
]);

Route::get('ex3byid/{ex3_id}/{number}/{count}',[
	'as'=>'ex3byid',
	'uses'=>'BaiTapController@getEx3ById'
]);

Route::get('ex4/{lesson_id}',[
	'as'=>'ex4',
	'uses'=>'BaiTapController@getEx4'
]);

Route::get('downloadfile/{ex4_id}', [
	'as'=>'downloadfile',
	'uses'=>'BaiTapController@downloadEx4'
]);

Route::post('postEx1/{ex1_id}', [
	'as'=>'postex1',
	'uses'=>'BaiTapController@postEx1'
]);

Route::post('postEx2/{ex2_id}', [
	'as'=>'postex2',
	'uses'=>'BaiTapController@postEx2'
]);

Route::post('postEx3/{ex3_id}', [
	'as'=>'postex3',
	'uses'=>'BaiTapController@postEx3'
]);

Route::post('postEx4/{ex4_id}', [
	'as'=>'postex4',
	'uses'=>'BaiTapController@postEx4'
]);