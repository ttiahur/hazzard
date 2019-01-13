<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 13.01.2019
 * Time: 13:59
 */

namespace App\Http\Managers;


use App\Bets;
use App\Deals;

class UserStatManager
{
    protected $id;
    protected $spend_points;
    protected $frozen_points;
    protected $realased_bets;
    protected $active_bets;
    protected $avalible_points;
    protected $avg_bet;
    protected $avg_chance;
    protected $wins;

    public function __construct()
    {
        $this->setId();
        $this->setSpendPoints();
        $this->setFrozenPoints();
        $this->setRealasedBets();
        $this->setActiveBets();
        $this->setAvgBet();
        $this->setAvgChance();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId(): void
    {
        $this->id = auth()->user()->id;
    }

    /**
     * @return mixed
     */
    public function getSpendPoints()
    {
        return $this->spend_points;
    }

    /**
     * @param mixed $spend_points
     */
    public function setSpendPoints(): void
    {
        $this->spend_points = Bets::spendPoints($this->id);
    }

    /**
     * @return mixed
     */
    public function getFrozenPoints()
    {
        return $this->frozen_points;
    }

    /**
     * @param mixed $frozen_points
     */
    public function setFrozenPoints(): void
    {
        $this->frozen_points = Bets::frozenPoints($this->id);
    }

    /**
     * @return int
     */
    public function getRealasedBets(): int
    {
        return $this->realased_bets;
    }

    /**
     * @param int $realased_bets
     */
    public function setRealasedBets(): void
    {
        $this->realased_bets = Bets::realasedBets($this->id);
    }

    /**
     * @return int
     */
    public function getActiveBets(): int
    {
        return $this->active_bets;
    }

    /**
     * @param int $active_bets
     */
    public function setActiveBets(): void
    {
        $this->active_bets = Bets::activeBets($this->id);
    }


    protected function setAvgBet()
    {
        $this->realased_bets > 0 ? $this->avg_bet = intval($this->spend_points / $this->realased_bets) : 0;
    }

    public function getAvgBet(){
        return $this->avg_bet;
    }

    protected function setAvgChance()
    {
        if ($this->realased_bets > 0){
            $deals = Bets::dealDataByUserId($this->id);
            $sum_chance = 0;
            foreach ($deals as $bet){
                $bet_points = $bet->points;
                $deal = Deals::find($bet->deal_id);
                $product_points = $deal->current_point;
                $sum_chance+= floatval($bet_points)/ floatval($product_points)*100;
            }
            $this->avg_chance = $sum_chance/$this->realased_bets;
        } else {
            $this->avg_chance = 0;
        }
    }

    public function getAvgChance(){
        return $this->avg_chance;
    }

    /**
     * @return mixed
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * @param mixed $wins
     */
    public function setWins(): void
    {
        $this->wins = Bets::wins($this->id);
    }

}
