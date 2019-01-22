<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 22.01.2019
 * Time: 20:16
 */

namespace App\Http\Managers;


use App\Bets;
use App\Deals;
use App\Delivery;

class DeliveryManager
{

    public function __construct($request)
    {
        $delivery = new Delivery();
        $delivery->id = $request->post('id');
        $delivery->street = $request->post('street');
        $delivery->city = $request->post('city');
        $delivery->post_code = $request->post('post_code');
        $delivery->save();

        $bet = Bets::where([
                ['deal_id', '=', $request->post('id')],
                ['status', '=', 2]
            ])->first();
        $bet->status  = 3;
        $bet->save();

        $deal = Deals::find($request->post('id'));
        $deal->status = 2;
        $deal->save();

        return true;

    }
}
