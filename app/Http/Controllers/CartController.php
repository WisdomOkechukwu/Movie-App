<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth'])->only('addCart');
    }
    public function addCart(Request $request)
    {   
        $cart = new Cart();
        
        $cart->user_id = auth()->user()->id;
        // dd($cart->user_id);
        $cart->movie_id = session('id');
        // dd($cart->movie_id);
        $cart->status = 'cart';
        if(!$cart->user_id || !$cart->movie_id){
         return redirect()->route('home');
        }
        else{

             $check = Cart::select('*')
                ->where('user_id', '=', $cart->user_id)
                ->where('status', '=', 'cart')
                ->where('movie_id', '=', $cart->movie_id)
                ->get();

                if($check->count()>0){
                   return redirect()->action(
                        [MovieController::class, 'findMovie'], ['id' => session('id')]
                    )->with('cartstatus', 'true');

                }
                else{
                
                $cart->save();
                

            
            

            $cartval = Cart::select('*')
                ->where('user_id', '=', $cart->user_id)
                ->where('status', '=', 'cart')
                ->get();

            
            $cartcounter =  $cartval->count();
            
            $request->session()->put('cart',$cartcounter);
            return redirect()->action(
                [MovieController::class, 'findMovie'], ['id' => session('id')]
            )->with('cartstatus', 'empty');;
                }

            

            
            
                
            }

        
    }
    
}
