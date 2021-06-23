<?php

namespace App\Http\Controllers\dataOrder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\DataOrderService;

class DataOrderController extends Controller
{
    protected $dataOrderService;
    public function __construct()
    {
        $this->dataOrderService = new DataOrderService;
    }

    public function indexData(){
        $dataOrder = $this->dataOrderService->getAllData();
        return view('pages.dataOrder.index', compact('dataOrder'));
    }
}
