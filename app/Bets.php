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
    public function last($id){
        return DB::table('bets')->orderByDesc('points')
            ->where('deal_id', $id)
            ->limit(12)
            ->select()
            ->get();
    }
}
