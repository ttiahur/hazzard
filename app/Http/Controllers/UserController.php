<?php

namespace App\Http\Controllers;

use App\Bets;
use App\Deals;
use App\Http\Managers\UserChartManager;
use App\Http\Managers\UserManager;
use App\Http\Managers\UserStatManager;
use App\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function account(Request $request)
    {
        $data = [
            'user' => UserManager::account(),
            'stat' => new UserStatManager(),
        ];
//        var_dump($data['stat']);


        return view('user.account', $data);
    }

    public function analytics(Request $request){
        if ($request->isMethod('post')){
            if ($category = $request->post('category')){
                $chart = new UserChartManager($category);
                return $chart->getData();
            } else {
                return response()->json(['success' => false]);
            }
        }
    }

    public function history()
    {
        $history = Bets::userHistory(auth()->user()->id)->toArray();
        foreach ($history as &$bet) {
            $bet->deal_id = Deals::idToProductId($bet->deal_id)->toArray()[0]->product_id;
            $bet->deal_id = Product::idToName($bet->deal_id)->toArray()[0]->name;
        }

        $data = [
            'history' => $history
        ];
        return view('user.history', $data);
    }

    public function addPoints(Request $request)
    {
        UserManager::addPoints(100);
    }

    public function update(Request $request)
    {
        $data = [
            'user' => UserManager::update($request),
        ];
        return redirect('/account');
    }
}
