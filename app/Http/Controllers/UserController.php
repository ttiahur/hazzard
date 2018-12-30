<?php

namespace App\Http\Controllers;

use App\Bets;
use App\Deals;
use App\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        return view('user.user');
    }
    public function history(){

        $history = Bets::userHistory(auth()->user()->id)->toArray();
        foreach ($history as &$bet){
            $bet->deal_id = Deals::idToProductId($bet->deal_id)->toArray()[0]->product_id;
            $bet->deal_id = Product::idToName($bet->deal_id)->toArray()[0]->name;

//            var_dump($bet->deal_id);

        }
//        exit();
//        var_dump($history->toArray());
//        exit();

        $data = [
            'history' => $history
         ];
        return view('user.history',$data);
    }
}
