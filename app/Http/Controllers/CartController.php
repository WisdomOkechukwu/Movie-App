<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth']);
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
    
    public function usercart()
    {

        $user = User::find(auth()->user()->id);
        $users = $user->movie;
        // foreach($users as $key){
        //     echo $key->pivot->movie_id
        //     .'<br>';
        // }

        return view('public.cartdetails',[
            'cartsetails' => $users
        ]);
        
    }

    public function deletecart($id, Request $request)
    {

        // echo "movie id $id"."  and  ".auth()->user()->id;
    
        $value = Cart::select('*')
                ->where('user_id', '=', auth()->user()->id)
                ->where('status', '=', 'cart')
                ->where('movie_id', '=', $id)
                ->get();

          if (count($value) != 0){
            foreach($value as $val){
                        $valueid = $val->id ;
                    }
                    $deleted  = Cart::find($valueid);
                    $deleted->delete();
                    if(auth()->user()){
                        $cartval = Cart::select('*')
                        ->where('user_id', '=', auth()->user()->id)
                        ->where('status', '=', 'cart')
                        ->get();
                        $cartcounter =  $cartval->count();
                        $request->session()->put('cart',$cartcounter);
            
                        }
                    return redirect()->route('cartlist');
          }
          else{
            return redirect()->route('cartlist');
          }

        
    }
}
