<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function purchase(){
        $addition = 0;
        $user = User::find(auth()->user()->id);
        $users = $user->movie;

        foreach($users as $key){
            $addition = $addition+$key->price;
            

        }
        return view('public.payment',[
            'price' => $addition
        ]);
    }

    public function transfer(){
        
        
    }
}
