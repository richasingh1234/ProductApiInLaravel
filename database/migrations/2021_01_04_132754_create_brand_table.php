<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;


class CreateBrandTable extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */

    protected $attributes = [
        'deleted_at' => 1,
    ];


    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
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
        Schema::dropIfExists('brand');
    }
}
