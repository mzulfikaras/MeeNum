<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DataOrder extends Model
{
    protected $table = 'data_order';
    protected $guarded = [];

    // public function getAllData(){
    //     return DB::table('data_order')
    //         ->leftJoin('data_customers', 'data_customers.customer_id', '=', 'data_order.customer_id')
    //         ->leftJoin('data_sales', 'data_sales.sales_by_id', '=', 'data_order.sales_by_id')
    //         ->leftJoin('data_shipping', 'data_shipping.serve_by_id', '=', 'data_order.serve_by_id')
    //         ->leftJoin('data_payment', 'data_payment.payment_type_id', '=', 'data_order.payment_type_id')
    //         ->get();
    // }
}
