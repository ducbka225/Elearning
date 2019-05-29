<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Course_Comment;
use Auth;
use App\Comment;
class CommentController extends Controller
{
    public function postCommentCourse($course_id, Request $req){
    	$comment = new User_Course_Comment;
    	$comment->id_course = $course_id;
    	$comment->id_user = Auth::user()->id;
    	$comment->content = $req->commentcourse;
    	$comment->save();
    	return redirect()->back()->with('thongbao', 'Viết bình luận thành công!');
    }

    public function postCommentLesson($lesson_id, Request $req){
    	$comment = new Comment;
    	$comment->id_lesson = $lesson_id;
    	$comment->id_user = Auth::user()->id;
    	$comment->content = $req->commentlesson;
    	$comment->save();
    	return redirect()->back()->with('thongbao', 'Viết bình luận thành công!');
    }
}
