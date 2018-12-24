<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * App\Deals
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $product_id
 * @property integer $status
 * @property integer $current_point
 * @property integer $users
 * @property integer $creator_id
 * @property integer $operator_id
 * @property string $added_on
 * @property string $ready_on
 * @property string $closed_on
 * @property string $realased_on
 */
class Deals extends Model
{


    public function getProduct($id = null)
    {
        if ($id==null){
            $product = DB::table('deals')
                ->leftjoin('products', 'deals.product_id', '=', 'products.product_id')
                ->select()
                ->get();
        } else {
            $product = DB::table('deals')
                ->leftjoin('products', 'deals.product_id', '=', 'products.product_id')
                ->select()
                ->where('deals.id',$id)
                ->get();
        }

        return $product;
    }
}
