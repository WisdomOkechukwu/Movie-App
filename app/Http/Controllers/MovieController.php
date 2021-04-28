<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function homePage(){
        $movie = Movie::all();
        return view('public.index',[
            'movie' => $movie
        ]);
    }

    public function Show(){
        // ->where('genre', 'SciFi')
        
        
    }

    
}
