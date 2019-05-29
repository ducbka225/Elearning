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

Route::get('/', [
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'

]);

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
])->middleware('studentLogin');

//midtest
Route::get('mid-test/{course_id}', 'TestController@getMidTest')->middleware('studentLogin');
Route::post('/post-mid-test', 'TestController@postMidTest');

Route::get('mid-test-result/{course_id}', 'TestController@getMidTestResult')->name('mid-test-result')->middleware('studentLogin');

//endtest
Route::get('end-test/{course_id}', 'TestController@getEndTest')->middleware('studentLogin');
Route::post('/post-end-test', 'TestController@postEndTest');

Route::get('end-test-result/{course_id}', 'TestController@getEndTestResult')->name('end-test-result')->middleware('studentLogin');
//da dang ki khoa hoc

Route::post('registercourse', 'AjaxController@postRegister');

Route::get('contact', 'PageController@getContact')->middleware('studentLogin');
Route::post('contact', 'PageController@postContact')->middleware('studentLogin');

Route::get('donelesson/{id}', 'PageController@getDoneLesson')->middleware('studentLogin');

//comment khóa học
Route::post('comment_course/{course_id}', 'CommentController@postCommentCourse');

Route::post('comment_lesson/{lesson_id}', 'CommentController@postCommentLesson');

// thông tin cá nhân

Route::get('student/info', 'PageController@getStudentInfo')->middleware('studentLogin');

Route::get('student/updateinfo', 'PageController@getUpdateInfo')->middleware('studentLogin');

Route::post('student/updateinfo', 'PageController@postUpdateInfo')->middleware('studentLogin');

Route::get('changepassword', 'PageController@getChangePassword')->middleware('studentLogin');
Route::post('changepassword', 'PageController@postChangePassword');

Route::get('student/coursejoin', 'PageController@getCourseJoin')->middleware('studentLogin');

Route::get('/student/infocource/{course_id}', 'PageController@getCourseInfo')->middleware('studentLogin');

Route::get('/student/naptien', 'PageController@getNapTien')->middleware('studentLogin');
Route::post('/student/naptien', 'PageController@postNapTien')->middleware('studentLogin');

//list teacher
Route::get('teacher', 'PageController@getTeacher');
Route::get('teacher_profile/{id}','PageController@getTeacherInfo');

// bài học đầu tiên
Route::get('lessonfirst/{course_id}',[
	'as'=>'lessonfirst',
	'uses'=>'PageController@getLessonFirst'
])->middleware('studentLogin');

Route::get('lesson/{lesson_id}',[
	'as'=>'lesson',
	'uses'=>'PageController@getLesson'
])->middleware('studentLogin');

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

/////////////////////////////////////////////////////////////
// Teacher

//Đăng Nhập
Route::get('/teacher/login', 'TeacherController@getLogin');
Route::post('/teacher/login', 'TeacherController@postLogin');

Route::get('/admin/login', 'TeacherController@getAdminLogin');
Route::post('/admin/login', 'TeacherController@postAdminLogin');

//Đăng xuất
Route::get('/teacher/logout','TeacherController@getLogout');

//list course
Route::get('/teacher/course', 'TeacherController@getCourse')->middleware('teacherLogin');

//list test
Route::get('/listmidtest/{id}', 'TeacherController@getListMidTest')->name('listmidtest');

Route::get('/addmidtest/{id}', 'TeacherController@getAddMidTest');
Route::post('/addmidtest/{id}', 'TeacherController@postAddMidTest');
//list student
Route::get('/liststudent/{id}', 'TeacherController@getListStudent')->name('liststudent');
Route::get('/deletestudent/{course_id}/{id}','TeacherController@deleteStudent');
Route::get('/addstudent/{id}', 'TeacherController@getAddStudent');
Route::post('/addstudent/{id}', 'TeacherController@postAddStudent');

//list Lesson by course
Route::get('/teacher/lesson/{course_id}', 'TeacherController@getLesson')->name('listlesson')->middleware('teacherLogin');

// thêm lesson
Route::get('/teacher/addlesson/{course_id}', 'TeacherController@getAddLesson')->name('addlesson')->middleware('teacherLogin');
Route::post('postaddlesson/{course_id}', 'TeacherController@postAddLesson');
Route::get('deletelesson/{lesson_id}', 'TeacherController@DeleteLesson')->middleware('teacherLogin');

//list ex
Route::get('/teacher/baitap/{lesson_id}', 'TeacherController@getBaiTap')->middleware('teacherLogin');
Route::get('/teacher/themex1/{lesson_id}', 'TeacherController@getThemex1')->middleware('teacherLogin');
Route::get('/teacher/themex2/{lesson_id}', 'TeacherController@getThemex2')->middleware('teacherLogin');
Route::get('/teacher/themex3/{lesson_id}', 'TeacherController@getThemex3')->middleware('teacherLogin');
Route::get('/teacher/themex4/{lesson_id}', 'TeacherController@getThemex4')->middleware('teacherLogin');

Route::post('/teacher/themex1/{lesson_id}', 'TeacherController@postThemex1');
Route::post('/teacher/themex2/{lesson_id}', 'TeacherController@postThemex2');
Route::post('/teacher/themex3/{lesson_id}', 'TeacherController@postThemex3');
Route::post('/teacher/themex4/{lesson_id}', 'TeacherController@postThemex4');



// Chấm bài
Route::get('/teacher/chambai/{lesson_id}', 'TeacherController@getChamBai')->middleware('teacherLogin');
Route::get('/teacher/chambai/ex1/{lesson_id}', 'TeacherController@getChamBaiEx1')->middleware('teacherLogin');
Route::get('/teacher/chambai/ex2/{lesson_id}', 'TeacherController@getChamBaiEx2')->middleware('teacherLogin');
Route::get('/teacher/chambai/ex3/{lesson_id}', 'TeacherController@getChamBaiEx3')->middleware('teacherLogin');
Route::get('/teacher/chambai/ex4/{lesson_id}', 'TeacherController@getChamBaiEx4')->middleware('teacherLogin');

Route::get('/teacher/chambai/ex1/{lesson_id}/{user_id}', 'TeacherController@getChamBaiEx1ByUser')->middleware('teacherLogin');
Route::post('/teacher/chambai/ex1/{submit_id}', 'TeacherController@postChamBaiEx1');

Route::get('/teacher/chambai/ex2/{lesson_id}/{user_id}', 'TeacherController@getChamBaiEx2ByUser')->middleware('teacherLogin');
Route::post('/teacher/chambai/ex2/{submit_id}', 'TeacherController@postChamBaiEx2');

Route::get('/teacher/chambai/ex4/{lesson_id}/{user_id}', 'TeacherController@getChamBaiEx4ByUser')->middleware('teacherLogin');
Route::post('/teacher/chambai/ex4/{submit_id}', 'TeacherController@postChamBaiEx4');
Route::get('downloadrefile/{id}', [
	'as'=>'downloadrefile',
	'uses'=>'TeacherController@downloadEx4'
]);

//comment
Route::get('/teacher/comment/{lesson_id}', 'TeacherController@getComment')->middleware('teacherLogin');
Route::post('/teacher/comment/{comment}', 'TeacherController@postComment');

Route::get('/teacher/xoacomment/{$comment_id}', 'TeacherController@getXoaComment');

//callvideo
Route::get('/callvideo', 'PageController@getCallVideo');

//Chat
Route::get('/chat/{course_id}', 'ChatController@getChat');
Route::get('/chatfriend/{id}/{course_id}', 'ChatController@getChatFriend');
Route::post('/chatfriend', 'ChatController@postChatFriend');

Route::get('/chatroom', 'ChatsController@chatroom');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

Route::post('/postMessage', 'ChatController@getMessageFromClient');

// <--------------------------------------------------------->
// Admin
Route::get('/admin/addcourse', 'AdminController@getAddCourse')->middleware('adminLogin');
Route::post('/admin/addcourse', 'AdminController@postAddCourse');
//list user
Route::get('/admin/user', 'TeacherController@getUser')->middleware('adminLogin');
Route::get('/amdin/adduser', 'AdminController@getAddUser')->middleware('adminLogin');
Route::post('/amdin/adduser', 'AdminController@postAddUser');
Route::get('/admin/deleteuser/{id}', 'AdminController@deleteUser')->middleware('adminLogin');

//category
Route::get('/admin/listcategory', 'AdminController@getCategory')->middleware('adminLogin');
Route::get('admin/deletecategory/{id}', 'AdminController@deleteCategory');
Route::get('admin/addcategory', 'AdminController@getAddCategory')->middleware('adminLogin');
Route::post('admin/addcategory', 'AdminController@postAddCategory');

//thithu
Route::get('thithu','PageController@thithu')->middleware('studentLogin');;
Route::get('test', 'TestController@gettest')->middleware('studentLogin');
Route::post('post-test', 'TestController@posttest');
Route::get('result/{times}', 'TestController@gettestresult')->name('result')->middleware('studentLogin');

//search
route::get('search', [
	'as'=>'search',
	'uses'=>'PageController@getSearch'
]);
