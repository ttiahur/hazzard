<?php

namespace App\Http\Controllers;

use App\Http\Managers\DeliveryManager;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function setAdress(Request $request){

        $response_data = new DeliveryManager($request);
        return response()->json([$response_data]);
    }
}
