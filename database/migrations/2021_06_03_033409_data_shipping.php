<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataShipping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_shipping', function (Blueprint $table){
            $table->increments('serve_by_id');
            $table->string('serve_by_name');
            $table->string('currency_id');
            $table->string('dec_point');
            $table->string('thousand_sep');
            $table->string('dec_digit');
            $table->string('shipping_to');
            $table->string('shipping_address');
            $table->string('shipping_phone');
            $table->string('shipping_city');
            $table->string('shipping_district');
            $table->string('shipping_subdistrict');
            $table->string('shipping_state_name');
            $table->string('shipping_country_name');
            $table->string('shipping_postal_code');
            $table->string('drop_ship_store_name');
            $table->string('drop_ship_sender_name');
            $table->string('drop_ship_contact_name');
            $table->string('drop_ship_contact_phone');
            $table->string('notes');
            $table->string('is_paid');
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
