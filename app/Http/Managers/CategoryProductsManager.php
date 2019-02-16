<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 29.01.2019
 * Time: 20:02
 */

namespace App\Http\Managers;


use App\Product;

class CategoryProductsManager
{
    protected $productList;



    public function __construct()
    {

    }

    /**
     * @param mixed $category_id
     */
    public function setProductList($category_id): void
    {
        $this->productList = Product::where('category_id', '=', $category_id)->get();

    }

    /**
     * @return mixed
     */
    public function getProductList()
    {
        return $this->productList;
    }


}
