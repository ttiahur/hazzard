<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 13.01.2019
 * Time: 21:50
 */

namespace App\Http\Managers;


use App\Bets;
use App\Category;

class UserChartManager
{
    protected $id;
    protected $category;
    protected $data;

    public function __construct($category)
    {
        $this->setId();
        $this->setCategory($category);
        $this->setData();

    }

    protected function setData()
    {
        switch ($this->category) {
            case 'points':
                $this->data = $this->getSpendPoint();
                break;
            case 'bets':
                $this->data = $this->getBets();
                break;
            case 'avgPoints':
                $this->data = $this->getAvgPoints();
            case  'avgChance':
                $this->data = $this->getAvgChance();
        }

    }

    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $id
     */
    protected function setId(): void
    {
        $this->id = auth()->user()->id;
    }

    /**
     * @param mixed $category
     */
    protected function setCategory($category): void
    {
        $this->category = $category;
    }


    protected function getSpendPoint()
    {
        $categories = Category::all();
        $data = [];
        foreach ($categories as $category) {
            $points = Bets::pointsByCategory($this->id, $category->id);
            if ($points)
                $data[] = [
                    'category' => $category->name,
                    'points' => $points,
                ];
        }
        return response()->json($data);
    }

    protected function getBets()
    {
        $categories = Category::all();
        $data = [];
        foreach ($categories as $category) {
            $points = Bets::betsByCategory($this->id, $category->id);
            if ($points)
                $data[] = [
                    'category' => $category->name,
                    'points' => $points,
                ];
        }
        return response()->json($data);
    }

    protected function getAvgPoints()
    {
        $categories = Category::all();
        $data = [];
        foreach ($categories as $category) {
            $points = Bets::avgPointsByCategory($this->id, $category->id);
            if ($points)
                $data[] = [
                    'category' => $category->name,
                    'points' => $points,
                ];
        }
        return response()->json($data);
    }
    protected function getAvgChance()
    {
        $categories = Category::all();
        $data = [];
        foreach ($categories as $category) {
            $points = Bets::avgChanceByCategory($this->id, $category->id);
//            var_dump(count($points));
            if (count($points)>0){
                $count_chance = count($points);
//                $count_chance = 1;
                $sum_chance = 0.0;
                foreach ($points as $point){
                    $sum_chance += $point->chance;
                }
                $points = floatval($sum_chance/$count_chance);
                if ($points>0){
                    $data[] = [
                        'category' => $category->name,
                        'points' => $points,
                    ];
                }
            }


        }
        return response()->json($data);
    }


}
