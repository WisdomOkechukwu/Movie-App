<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    
    

    public function homePage(Request $request){
        // appending data from database movies into a variable
        $movie = Movie::all();
        if(auth()->user()){
        $cartval = Cart::select('*')
                ->where('user_id', '=', auth()->user()->id)
                ->where('status', '=', 'cart')
                ->get();
        $cartcounter =  $cartval->count();
        $request->session()->put('cart',$cartcounter);
        }

        // sending movie data to the view
        return view('public.index',[
            'movie' => $movie
        ]);
    }

    public function findMovie($id,Request $request)
    {       if(auth()->user()){
            $cartval = Cart::select('*')
            ->where('user_id', '=', auth()->user()->id)
            ->where('status', '=', 'cart')
            ->get();
            $cartcounter =  $cartval->count();
            $request->session()->put('cart',$cartcounter);

            }



        //finding an id in a database
        $findMovie = Movie::find($id);

        $request->session()->put('id',$id);
        
        
        // sending movie data to the view
        return view('public.moviedetails',[
            'findMovies' => $findMovie
        ]);
    }

    public function addCart(){
        return view('public.search');
    }

    
}
