<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 08.02.2019
 * Time: 21:18
 */

namespace App\Http\Managers;


use App\Bets;
use App\Deals;
use App\Delivery;
use App\Product;
use App\User;

class ProductBuyManager
{

    protected $id;
    /**
     * @var Deals
     */
    private $deal;
    /**
     * @var Product
     */
    private $product;
    /**
     * @var User
     */
    private $user;
    /**
     * @var Bets
     */
    protected $bet;
    /**
     * @var Delivery
     */
    private $delivery;

    public function __construct($deal_id)
    {
        $this->setId($deal_id);
        $this->setDeal($this->id);
        $this->setDelivery($this->id);
        $this->setProduct($this->deal->product_id);
        $this->setBet($this->id);
        $this->setUser($this->bet->user_id);

    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


    /**
     * @param $id
     */
    public function setDeal($id): void
    {
        $this->deal = Deals::find($id);
    }

    /**
     * @param $id
     */
    public function setProduct($id): void
    {
        $this->product = Product::find($id);
    }

    /**
     * @param $id
     */
    public function setUser($id): void
    {
        $this->user = User::find($id);
    }

    /**
     * @param $id
     */
    public function setDelivery($id): void
    {
        $this->delivery = Delivery::find($id);
    }

    /**
     * @param mixed $id
     */
    public function setBet($id): void
    {
        $this->bet = Bets::where([
            ['deal_id', $id],
            ['status', 3]
        ])->first();
    }

    /**
     * @return Deals
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }


}
