<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 21.01.2019
 * Time: 19:37
 */

namespace App\Http\Managers;


use App\Deals;
use App\User;

class WinManager
{
    protected $bet;
    protected $deal;
    protected $product;
    protected $user;

    public function __construct($bet)
    {
        $this->setBet($bet);
        $this->setUser();
        $this->setDeal();
        $this->setProduct();
    }

    private function setUser(){
        $this->user = User::find(auth()->user()->id);
    }

    private function setBet($bet){
        $this->bet = $bet;
    }

    private function setDeal(){
        $this->deal = Deals::find($this->bet->deal_id);
    }

    private function setProduct(){
        $deals = new Deals();
        $this->product = $deals->getProduct($this->deal->id)[0];
    }

    /**
     * @return mixed
     */
    public function getBet()
    {
        return $this->bet;
    }

    /**
     * @return mixed
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }


}
