<?php

namespace App\Repositories;

use App\Models\DataOrder;


class DataOrderRepository{

    public function getAllData(){
        $data = DataOrder::with([]);
        return $data->get();
    }
}