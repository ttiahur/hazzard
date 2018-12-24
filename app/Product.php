<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

}
