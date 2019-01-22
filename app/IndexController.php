<?php

namespace App\Http\Controllers;

use App\Bets;
use App\Deals;
use App\Http\Managers\WinManager;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function show(){
        $win = null;
        if (Auth::check()) {
            $win = Bets::notConfirmedBet();
            if ($win != null){
                $winManager = new WinManager($win);
                $win = [
                    'bet' => $winManager->getBet(),
                    'user' => $winManager->getUser(),
                    'product' => $winManager->getProduct(),
                    'deal' => $winManager->getDeal(),
                ];
            }
        }
        $dealEntity = new Deals();
        $deals = $dealEntity->getProduct();
        $data = [
            'deals' => $deals,
            'win' =>$win,
        ];
        return view('show',$data);
    }
    public function home(){
        return view('home');
    }
    public function logout(){
        Auth::logout();
        return view('auth.login');
    }
}
