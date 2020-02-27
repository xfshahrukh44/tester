<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderMasterProductMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_master_product_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_master_id');
            $table->integer('product_master_id');
            $table->integer('discount');
            $table->enum('discount_unit', ['percentage', 'amount']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_master_product_master');
    }
}
