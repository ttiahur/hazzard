<?php

namespace App;

use App\Deals;
use phpDocumentor\Reflection\Types\Mixed_;

class DealExt extends Deals
{
    protected $table = 'deals';
    public $controls;
    public $product_name;
    public $product;


    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->where('status', '>', -1);
        });
    }

    /**
     * @param mixed $controls
     */
    public function setControls(): void
    {
        $control = [];
        switch ($this->status) {
            case 0:
                $control[] = [
                    'label' => 'Show',
                    'action' => '/deal/' . $this->id,
                    'icon' => 'fas fa-info-circle',
                ];
                break;
            case 1:
                $control[] = [
                    'label' => 'Show',
                    'action' => '/show/' . $this->id,
                    'icon' => 'fas fa-info-circle',
                ];
                break;
            case 2:
                $control[] = [
                    'label' => 'Buy',
                    'action' => '/buy/' . $this->id,
                    'icon' => 'fas fa-shopping-cart',
                ];
                break;
            case 3:
                $control[] = [
                    'label' => 'Details',
                    'action' => '/delivery-details/' . $this->id,
                    'icon' => 'fas fa-info-circle',
                ];
                break;
            case 4:
                $control[] = [
                    'label' => 'Close',
                    'action' => '/close-deal/' . $this->id,
                    'icon' => 'fas fa-times-circle',
                ];
                break;
            case 5:
                $control[] = [
                    'label' => 'Info',
                    'action' => '/deal/' . $this->id,
                    'icon' => 'fas fa-info-circle',
                ];
                break;
        }
        $this->controls = $control;

    }

    /**
     * @return mixed
     */
    public function getControls()
    {
        return $this->controls;
    }

    /**
     */
    public function setProductName()
    {
        $product = Product::where('product_id', $this->product_id)->first();
        $this->product_name = $product->name;

    }


}

