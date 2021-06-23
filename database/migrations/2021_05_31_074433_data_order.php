<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('outlet_name');
            $table->string('order_no');
            $table->date('order_date');
            $table->time('order_time');
            $table->string('table_no');
            $table->string('product_sku');
            $table->string('product_name');
            $table->string('product_uom');
            $table->string('product_variant_sku');
            $table->string('product_variant_name');
            $table->string('product_combo_name');
            $table->string('product_combo_sku');
            $table->string('product_group_name');
            $table->string('brand_name');

            $table->string('serial_no');
            $table->string('qty');
            $table->string('price');
            $table->string('addon_price');
            $table->string('discount');
            $table->string('amount');
            $table->string('cost_price');
            $table->string('cost_amount');
            $table->string('order_source');
            $table->string('order_source_name');

            $table->string('customer_id');
            $table->string('sales_by_id');
            $table->string('serve_by_id');
            $table->string('payment_type_id');

            // $table->string('customer_id');
            // $table->string('customer_type');
            // $table->string('customer_name');
            // $table->string('customer_email');
            // $table->string('customer_phone');

            // $table->string('sales_by_id');
            // $table->string('sales_by_email');
            // $table->string('sales_by_name');

            // $table->string('serve_by_id');
            // $table->string('serve_by_name');
            // $table->string('currency_id');
            // $table->string('dec_point');
            // $table->string('thousand_sep');
            // $table->string('dec_digit');
            // $table->string('shipping_to');
            // $table->string('shipping_address');
            // $table->string('shipping_phone');
            // $table->string('shipping_city');
            // $table->string('shipping_district');
            // $table->string('shipping_subdistrict');
            // $table->string('shipping_state_name');
            // $table->string('shipping_country_name');
            // $table->string('shipping_postal_code');
            // $table->string('drop_ship_store_name');
            // $table->string('drop_ship_sender_name');
            // $table->string('drop_ship_contact_name');
            // $table->string('drop_ship_contact_phone');
            // $table->string('notes');
            // $table->string('is_paid');

            // $table->string('payment_type_id');
            // $table->string('payment_type_name');
            // $table->string('payment_mode_name');
            // $table->string('bt_bank_name');
            // $table->string('bt_account_name');
            // $table->string('bt_account_no');
            // $table->date('shipping_date');
            // $table->string('status');
            // $table->string('note');
            // $table->string('product_comission');
            // $table->string('product_variant_comission');
            // $table->string('product_combo_comission');
            // $table->time('posting_time');
            // $table->string('tax_amount');
            // $table->string('item_name');
            // $table->string('item_sku');
            // $table->string('comission');
            // $table->string('comission_amount');
            // $table->string('discount_rate');
            // $table->string('discount_percent');
            // $table->string('profit');
            // $table->string('forder_rate');
            // $table->string('famount');
            // $table->string('fcost_amount');
            // $table->string('fprofit');
            // $table->string('payment_mode');
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
