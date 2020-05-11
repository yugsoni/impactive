<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;
use Auth;
use DB;
use Pusher\Pusher;
class ChatAppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function chatApp()
    {
        // $users = User::where('id', '!=', Auth::id())->get();
        
            $users = DB::select("select users.id, users.name, users.email, users.username, users.avatar, users.gender, users.country, count(is_read) as unread 
        from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
        where users.id != " . Auth::id() . " 
        group by users.id, users.name, users.email, users.username, users.avatar, users.gender, users.country");
        

        return view('pages.app-chat', ['users' => $users]);
    }
    public function getmessage($user_id)
    {
        $my_id = Auth::id();
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->orwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->get();
        return view('messages.index', ['messages' => $messages]);
    }
    public function sendMessage(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;
        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0;
        $data->save();

        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
