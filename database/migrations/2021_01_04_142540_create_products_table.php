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
            $table->mediumInteger('price');
            $table->mediumInteger('mrp_price');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->nullable()->constrained();
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
