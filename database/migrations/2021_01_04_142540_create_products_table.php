<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sku');
            $table->tinyInteger('price');
            $table->tinyInteger('mrp_price');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('brandId');
            $table->foreign('brandId')->references('id')->on('brand')->nullable()->constrained();
            $table->enum('isDeleted', array('1','0'))->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}