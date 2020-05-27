<?php

namespace App\Http\Controllers;

use App\Friend;
use Illuminate\Http\Request;


/*/
class SearchController extends Controller
{
    public function index()
    {
        $query = request()->input('q');
        $Show = Friend::where('name', 'LIKE', "%$query%")
            ->appends(request()->query());

        return view('frontend/friends', [
            'query' => $query,
        ]);
    }
}
