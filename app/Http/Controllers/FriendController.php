<?php

namespace App\Http\Controllers;

use App\friend;
use Illuminate\Http\Request;

class FriendController extends Controller


{
    public function destroy(friend $friend)
    {
    $friend->delete();

    return redirect()->route('');
    }
}

