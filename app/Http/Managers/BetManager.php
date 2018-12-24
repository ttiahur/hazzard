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
      $maxPoints = $maxPoints<0 ? 0 :$maxPoints;

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
}