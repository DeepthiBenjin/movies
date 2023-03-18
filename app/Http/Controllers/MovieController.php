<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    function showMovies(Request $request) {

        $movies = DB::select("select * from tbl_movie");
        return view('dashboard',compact('movies'));
    }
}
