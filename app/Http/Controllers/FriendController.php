<?php

namespace App\Http\Controllers;

use App\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index()
    {
        $friends = Friend::all();
        return view('/frontend/friends', [
            'friends' => $friends
        ]);
    }

    public function destroy(Friend $friend)
    {
    $friend->delete();

    return redirect()->route('friends.index');
    }
}