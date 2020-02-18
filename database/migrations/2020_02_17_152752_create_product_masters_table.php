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
            $table->integer('category_id');
            $table->string('title')->unique();
            $table->text('short_desc');
            $table->longtext('long_desc');
            $table->string('unit');
            $table->integer('price');
            $table->integer('cost');
            $table->integer('discount');
            $table->enum('status',['draft','pending','completed']);
            $table->string('created_by');
            $table->string('modified_by')->nullable();
            $table->integer('threshold');
            $table->timestamps();
            $table->softDeletes()->nullable();
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
    }
}
