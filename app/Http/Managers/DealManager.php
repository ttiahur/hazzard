<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 13.01.2019
 * Time: 11:51
 */

namespace App\Http\Managers;


use App\Bets;
use App\Deals;

class DealManager
{
    public static function complete($id)
    {
        $deal = Deals::find($id);
        $points = $deal->current_point;
        srand(time());
        $winner_point = rand(1, $points);
        $bets = Bets::betsByDealId($id);
        foreach ($bets as $bet) {
            $bet = Bets::find($bet->id);

            if ($bet->point_start <= $winner_point && $bet->point_end >= $winner_point) {
                $bet->status = 2;
                $bet->save();
            } else {
                $bet->status = 1;
                $bet->save();
            }
        }
        $deal->status = 1;
        $deal->save();
        return $winner_point;
    }
}
