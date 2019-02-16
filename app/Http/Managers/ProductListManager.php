<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 29.01.2019
 * Time: 20:00
 */

namespace App\Http\Managers;


use App\Category;

class ProductListManager
{
    protected $categoryList;
    protected $categoryProductManager;
    protected $productListByCategory;

    public function __construct()
    {
        $this->setCategoryList();
        $this->setCategoryProductManager();
        $this->setProductListByCategory();
    }



    private function setCategoryProductManager(): void
    {
        $this->categoryProductManager = new CategoryProductsManager();
    }



    /**
     * @param mixed $categoryId
     */
    public function addToCategoryList($category): void
    {
        $this->categoryProductManager->setProductList($category->id);

        $this->productListByCategory[$category->name] = $this->categoryProductManager->getProductList();
    }

    /**
     * @return mixed
     */
    public function setCategoryList()
    {
        $this->categoryList = Category::all();
    }

    /**
     * @param mixed $productListByCategory
     */
    public function setProductListByCategory(): void
    {
        foreach ($this->categoryList as $category){
            $this->addToCategoryList($category);
        }
    }

    /**
     * @return mixed
     */
    public function getProductListByCategory()
    {
        return $this->productListByCategory;
    }


}
