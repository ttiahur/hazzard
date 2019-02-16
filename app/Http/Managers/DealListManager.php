<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 03.02.2019
 * Time: 19:52
 */

namespace App\Http\Managers;

use App\DealExt;
use App\Deals;

/**
 * Class DealListManager
 * @package App\Http\Managers
 * info about statuses:
 *  0 - active;
 * 1 - comleate;
 * 2 - contacted with winner;
 * 3 - send product to winner;
 * 4 - winner confirm product delivery;
 * 5 - closed;
 *
 *  status list located in config/global.php (not yet) Hy Hy Hy
 */
class DealListManager
{
    protected $statusList;
    protected $statusLabels;
    protected $dealsByStatus;


    public function __construct()
    {
        $this->setStatusList();
        $this->setStatusLabels();
        $this->setDealsByStatus($this->getStatusList(),$this->getStatusLabels());
    }

    /**
     * @param mixed $statusList
     */
    protected function setStatusList(): void
    {
        $this->statusList = [0, 1, 2, 3, 4, 5];
    }

    /**
     * @param mixed $statusLabels
     */


    protected function setStatusLabels(): void
    {
        $this->statusLabels = [
            0 => "Active",
            1 => "Wait confirm delivery data",
            2 => "Ready to buy",
            3 => "Send for customer",
            4 => "Delivered",
            5 => "Closed",
        ];
    }

    /**
     * @return mixed
     */
    protected function getStatusList()
    {
        return $this->statusList;
    }

    /**
     * @return mixed
     */
    protected function getStatusLabels()
    {
        return $this->statusLabels;
    }

    /**
     * @param $dealStatuses
     * @param $dealLabels
     */
    protected function setDealsByStatus($dealStatuses, $dealLabels): void
    {
        $dealData = [];

        foreach ($dealStatuses as $status) {

            $dealData[] = [
                'label' => $dealLabels[$status],
                'param' => strtolower(str_replace(' ', '_',$dealLabels[$status])),
                'deals' => $this->setDealControlls(DealExt::where('status', $status)->get())
            ];
        }
        $this->dealsByStatus = $dealData;
    }

    protected function setDealsByStatus2($dealStatuses, $dealLabels): void
    {
        $deals = [1,1,2];
        foreach ($deals as &$deal){
            $deal->setControls();

        }

    }

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->dealsByStatus;
    }

    protected function setDealControlls($deals){

        foreach ($deals as &$deal){
            $deal->setControls();
            $deal->setProductName();

        }
        return $deals;
    }

}
