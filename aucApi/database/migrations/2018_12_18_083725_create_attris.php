<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attris', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lot_id')->comment('拍品id');
            $table->string('attriName')->comment('属性名');
            $table->string('attriVal')->comment('属性值');
            $table->foreign('lot_id')->references('id')->on('lots');
            $table->comment='牌品属性表';
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
        Schema::dropIfExists('attris');
    }
}
