<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only('addCart');
    }
    

    public function homePage(){
        // appending data from database movies into a variable
        $movie = Movie::all();
        // sending movie data to the view
        return view('public.index',[
            'movie' => $movie
        ]);
    }

    public function findMovie($id)
    {   
        //finding an id in a database
        $findMovie = Movie::find($id);
        // sending movie data to the view
        return view('public.moviedetails',[
            'findMovies' => $findMovie
        ]);
    }

    public function addCart($id){
        return view('public.search');
    }

    
}
