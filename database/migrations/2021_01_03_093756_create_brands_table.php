<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('createdBy');
            $table->foreign('createdBy')->references('id')->on('users')->nullable()->constrained();
            $table->string('name');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('brands');
    }
}
