<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_category_id');
            $table->string('title')->unique();
            $table->text('short_desc');
            $table->longText('long_desc');
            $table->string('unit');
            $table->integer('price');
            $table->integer('cost');
            $table->integer('discount');
            $table->enum('status', ['draft', 'pending', 'completed']);
            $table->string('created_by');
            $table->string('modified_by')->nullable();
            $table->integer('threshold');
            $table->timestamps();
            $table->softDeletes()->nullable();
        });

        Schema::create('product_master_warehouse', function (Blueprint $table) {
            $table->integer('product_master_id');
            $table->integer('warehouse_id');
            $table->primary(['product_master_id', 'warehouse_id']);            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_masters');

        Schema::dropIfExists('product_master_warehouse');
        
    }
}
