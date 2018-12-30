<?php

namespace App\Http\Controllers\admin;

use App\Bets;
use App\Deals;
use App\Http\Managers\BetManager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BetController extends Controller
{
    public function addAuto(Request $request)
    {
        $id = $request->route('id');
        BetManager::autoBet($id);
    }

    public function add(Request $request)
    {
        $id = $request->route('id');
        $data = BetManager::addBet($id);
        return response()->json($data);
    }

    public function confirmBet(Request $request)
    {
        $id = $request->route('id');
        $points = $request->post('points');
        $result = BetManager::confirmBet($id, $points);
        return response()->json($result);

    }
}
