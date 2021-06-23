<?php

namespace App\Service;

use App\Models\DataOrder;
use App\Repositories\DataOrderRepository;

class DataOrderService{

    protected $dataOrderRepository;

    public function __construct()
    {
        $this->dataOrderRepository = new DataOrderRepository;
    }

    public function getAllData(){
        try {
            $dataOrder = $this->dataOrderRepository->getAllData();
            if (!$dataOrder) {
                return returnCustom("Data Does Not Exist");
            }
            return $dataOrder;

        } catch (\Exception $e) {
            return returnCustom($e->getMessage());
        }
    }
}
