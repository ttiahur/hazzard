<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 24.12.2018
 * Time: 16:29
 */

namespace App\Http\Managers;


use App\Bets;
use App\Deals;
use App\Product;
use App\User;

class BetManager
{
  static public function addBet($id){
      $deal = Deals::find($id);
      $user = User::find(auth()->user()->id);
      $product = Product::where('product_id', $deal->product_id)->get();
      $product = $product[0];

      $maxPoints = ($deal->current_point+$user->points) >= $product->points ? $product->points - $deal->current_point : $user->points;
      $maxPoints = $maxPoints<0 ? 0 : $maxPoints;

      return [
          'user' => $user,
          'deal' => $deal,
          'product' => $product,
          'maxPoints' => $maxPoints,
      ];
  }

  static public function autoBet($id){
      $deal = Deals::find($id);
      $bet = new Bets();
      $points = rand(1,500);
      $bet->deal_id = $id;
      $bet->points =$points;
      $bet->point_start = $deal->current_point+1;
      $bet->point_end = $deal->current_point+$points;
      $bet->user_id = auth()->user()->id;
      $bet->save();
      $deal->current_point+=$points;
      $deal->save();
  }

  static public function confirmBet($id, $points){
        $betParams = self::addBet($id);
        if ($points<=$betParams['maxPoints']){
            $deal = Deals::find($id);
            $product = Product::where('product_id', $deal->product_id)->get();
            $product = $product[0];
            $bet = new Bets();
            $bet->deal_id = $id;
            $bet->points =$points;
            $bet->point_start = $deal->current_point+1;
            $bet->point_end = $deal->current_point+$points;
            $bet->user_id = auth()->user()->id;
            $bet->save();
            $deal->current_point+=$points;
            $current_points = $deal->current_point;
            $deal->save();
            User::subPoints($points);
            if ($current_points == $product->points){
                $winner = DealManager::complete($id);
            }
//            $user = new User();
//            $user = $user->find($bet->user_id );
//            $user->subPoints($points);
            return ['success' => true,
                    'curent' => $current_points,
                    'product' => $product->points,
                    'winer' => isset($winner)? $winner : false,
            ];
        }
        else {
            return ['success' => false];
        }
  }
}
