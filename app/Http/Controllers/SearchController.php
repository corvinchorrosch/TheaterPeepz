<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Show;

/*/ 

class SearchController extends Controller
{
    public function index()
    {
        $query = request()->input('q');
        $Show = Show::where('name', 'LIKE', "%$query%")
            ->appends(request()->query());

        return view('frontend/includes/header', [
            'query' => $query,
        ]);
    }
}
