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

    function searchshows(Request $request) {
        if(isset($request->val)) {
            
            $shows = DB::select("select * from tbl_shows s, tbl_theatre t where s.movieid=? AND s.theatreid=t.theatreid",[$request->val]);

        }
        return view('showmovies',compact('shows')) ;
    }
}
