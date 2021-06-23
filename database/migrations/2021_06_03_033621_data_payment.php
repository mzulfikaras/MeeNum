<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_payment', function (Blueprint $table){
            $table->increments('payment_type_id');
            $table->string('payment_type_name');
            $table->string('payment_mode_name');
            $table->string('bt_bank_name');
            $table->string('bt_account_name');
            $table->string('bt_account_no');
            $table->date('shipping_date');
            $table->string('status');
            $table->string('note');
            $table->string('product_comission');
            $table->string('product_variant_comission');
            $table->string('product_combo_comission');
            $table->time('posting_time');
            $table->string('tax_amount');
            $table->string('item_name');
            $table->string('item_sku');
            $table->string('comission');
            $table->string('comission_amount');
            $table->string('discount_rate');
            $table->string('discount_percent');
            $table->string('profit');
            $table->string('forder_rate');
            $table->string('famount');
            $table->string('fcost_amount');
            $table->string('fprofit');
            $table->string('payment_mode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
