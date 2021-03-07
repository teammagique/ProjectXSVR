<?php

namespace App\Http\Controllers;

use App\Models\Message;
use \App\Models\Room;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Room $room)
    {
        $user_id = request()->user()->id;
        return view('messages.index', [
            'messages'=>$room->messages
        ]);
        
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Room $room)
    {
        request()->validate(
            ['message' => 'required|min:1']
        );
        Message::create(
            [
                'message' => request('message'),
                'room_id'=> $room->id,
                'user_id'=> request()->user()->id,
            ]
            );
        return redirect()->route('messages.index', ['room'=>$room->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $room = $message->room;
        $message->delete();
        return  redirect()->route('messages.index', ['room'=>$room->id]);
    }
}
