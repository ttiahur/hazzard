<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Product
 * @package App
 * @property integer $product_id
 * @property integer $category_id
 * @property string $name
 * @property string $about
 * @property string $product_url
 * @property string $shop_url
 * @property integer $points
 * @property integer $realeased_count
 * @property integer $creator_id
 */
class Product extends Model
{
static function idToName($id){
    return DB::table('products')
        ->select('name')
        ->where('product_id',$id)
        ->get();
}
}
