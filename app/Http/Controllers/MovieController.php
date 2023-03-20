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
            
            $shows = DB::select("select * from tbl_shows s, tbl_theatre t, tbl_movie m, tbl_location l where s.movieid=? 
                                AND s.theatreid=t.theatreid AND m.movieid= s.movieid AND l.locationid= t.locationid",[$request->val]);

        }
        return view('showmovies',compact('shows')) ;
    }

    function showseats(Request $request) {
        if(isset($request->showsid) && isset($request->theatreid)) {

            $showseats = DB::select("select * from tbl_shows s, tbl_theatre t, tbl_movie m, tbl_location l where s.showsid=? AND s.theatreid=?
            AND s.theatreid=t.theatreid AND m.movieid= s.movieid AND l.locationid= t.locationid",[$request->showsid,$request->theatreid]);
        }
            
        return view('showseats',compact('showseats')) ;
    }

    public function booking(Request $request)
    {  
                  
        $data = $request->all();
        $check = $this->bookticket($data);
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully booked tickets');
    }

    public function bookticket(array $data)
    { 
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'booking_ref' => time() . '-' . $data['name'],
        'password' => Hash::make($data['password'])
      ]);
    }
}
