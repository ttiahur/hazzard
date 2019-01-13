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

    static public function realasedBets($id){
        return DB::table('bets')
            ->where([
                ['status', '>', 0],
                ['user_id', '=', $id]
            ])
            ->count('id');
    }
    static public function activeBets($id){
        return DB::table('bets')
            ->where([
                ['status', '=', 0],
                ['user_id', '=', $id]
            ])
            ->count('id');
    }

    static public function dealDataByUserId($id){
        return DB::table('bets')
            ->where([
                ['status', '>', 0],
                ['user_id', '=', $id]
            ])
            ->select('deal_id','points')
            ->get();
    }

    static public function wins($id){
        return DB::table('bets')
            ->where([
                ['status', '=', 2],
                ['user_id', '=', $id]
            ])
            ->count('status');
    }

}
