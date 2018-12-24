<?php

namespace App\Http\Controllers;

use App\Deals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function show(){
        $dealEntity = new Deals();
        $deals = $dealEntity->getProduct();
        $data = [
            'deals' => $deals,
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
