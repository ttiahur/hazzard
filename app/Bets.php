<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Bets
 * @package App
 * @property integer $deal_id
 * @property integer $user_id
 * @property integer $points
 * @property integer $point_start
 * @property integer $point_end
 * @property integer $status
 * @property string $created_at
 */
class Bets extends Model
{
    public function last($id)
    {
        return DB::table('bets')->orderByDesc('points')
            ->where('deal_id', $id)
            ->limit(12)
            ->select()
            ->get();
    }

    static public function userHistory($id)
    {
        return DB::table('bets')->orderByDesc('points')
            ->where('user_id', $id)
            ->select()
            ->get();
    }

    static public function betsByDealId($id)
    {
        return DB::table('bets')
            ->orderBy('point_start')
            ->where('deal_id', $id)
            ->select('id')
            ->get();
    }

    static public function spendPoints($id)
    {
        return DB::table('bets')
            ->where([
                ['status', '>', 0],
                ['user_id', '=', $id]
            ])
            ->sum('points');
    }

    static public function frozenPoints($id)
    {
        return DB::table('bets')
            ->where([
                ['status', '=', 0],
                ['user_id', '=', $id]
            ])
            ->sum('points');
    }

    static public function realasedBets($id)
    {
        return DB::table('bets')
            ->where([
                ['status', '>', 0],
                ['user_id', '=', $id]
            ])
            ->count('id');
    }

    static public function activeBets($id)
    {
        return DB::table('bets')
            ->where([
                ['status', '=', 0],
                ['user_id', '=', $id]
            ])
            ->count('id');
    }

    static public function dealDataByUserId($id)
    {
        return DB::table('bets')
            ->where([
                ['status', '>', 0],
                ['user_id', '=', $id]
            ])
            ->select('deal_id', 'points')
            ->get();
    }

    static public function wins($id)
    {
        return DB::table('bets')
            ->where([
                ['status', '>=', 2],
                ['user_id', '=', $id]
            ])
            ->count('status');
    }

    static public function pointsByCategory($id,$category)
    {
        return DB::table('bets')
            ->where([
                ['bets.status', '>', 0],
                ['user_id', '=', $id],
                ['deals.category_id', '=', $category]
            ])
            ->leftjoin('deals', 'bets.deal_id', '=', 'deals.id')
//            ->get();
            ->sum('points');
    }

    static public function betsByCategory($id,$category)
    {
        return DB::table('bets')
            ->where([
                ['bets.status', '>', 0],
                ['user_id', '=', $id],
                ['deals.category_id', '=', $category]
            ])
            ->leftjoin('deals', 'bets.deal_id', '=', 'deals.id')
//            ->get();
            ->count();
    }

    static public function avgPointsByCategory($id, $category)
    {
        return DB::table('bets')
            ->where([
                ['bets.status', '>', 0],
                ['user_id', '=', $id],
                ['deals.category_id', '=', $category]
            ])
            ->leftjoin('deals', 'bets.deal_id', '=', 'deals.id')
//            ->get();
            ->avg('points');
    }

    static public function avgChanceByCategory($id,$category)
    {
        return DB::table('bets')
            ->where([
                ['bets.status', '>', 0],
                ['user_id', '=', $id],
                ['deals.category_id', '=', $category]
            ])
            ->leftjoin('deals', 'bets.deal_id', '=', 'deals.id')
            ->selectRaw('points/current_point*100 as chance')
            ->get();
    }

    static public function notConfirmedBet(){
        return DB::table('bets')
            ->where([
                ['user_id','=', auth()->user()->id],
                ['status','=',2],
            ])
            ->first();
    }

    static public function winBetByDealId($id){
        return DB::table('bets')
            ->where([
                ['deal_id', '=', $id],
                ['status', '=', 2]
            ])
            ->first();
    }

}
