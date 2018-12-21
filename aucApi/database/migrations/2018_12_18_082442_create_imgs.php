<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgs', function (Blueprint $table) {
            $table->unsignedInteger('lot_id')->comment('拍品id');
            $table->string('lotImgUrl')->comment('拍品图片地址');
            $table->foreign('lot_id')->references('id')->on('lots')->onDelete('cascade');
            $table->comment='牌品图片表';
            $table->engine='innodb';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imgs');
    }
}
