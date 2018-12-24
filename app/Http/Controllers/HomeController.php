<?php

namespace App\Http\Controllers;

use App\Deals;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        echo '<pre>';
        $dealEntity = new Deals();
        $deals = $dealEntity->getProduct();
        $data = [
          'deals' => $deals,
        ];
//        var_dump($data);
//        exit();

        return view('home', $data);
    }
}
