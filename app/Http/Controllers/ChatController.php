<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Category;
use App\User;
use Auth;
use App\Chat;
use App\Register;
class ChatController extends Controller
{
	function __construct(){
        $category = Category::all();
        view()->share('category',$category);
    }

    public function getChat($course_id){
    	$id_user = Auth::User()->id;
    	$user = Register::where('id_course', $course_id)
                        ->where('id_user', '<>', $id_user)->get();
    	$course = Course::where('id', $course_id)->first();
    	return view('page.chat.chat', compact('course', 'user'));
    }

    public function getChatFriend($id){
        $id_user = Auth::User()->id;
        $user = User::where('id', '<>', $id_user)->get();
        $chat = Chat::where(function ($query) use ($id) {
            $query->where('user_id', Auth::user()->id)
                ->where('friend_id', $id);
        })->orWhere(function ($query) use ($id) {
            $query->where('friend_id', Auth::user()->id)
                ->where('user_id', $id);
        })->orderBy('created_at', 'asc')
            ->with(['user'])
            ->get();
        return view('page.chat.chat_friend', compact('chat', 'user', 'id'));
    }

    public function postChatFriend(Request $req){
        $id_user = Auth::User()->id;
        $chat = new Chat;
        $chat->user_id = $id_user;
        $chat->friend_id = $req->friend_id;
        $chat->chat = $req->chat;
        $chat->save();
        return redirect()->back();
    }
}
