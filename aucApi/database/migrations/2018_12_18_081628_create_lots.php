<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lotName')->comment('拍品名');
            $table->float('lotPrice')->comment('底价');
            $table->float('range')->comment('最低加价幅度');
            $table->string('time')->comment('竞拍时间');
            $table->string('timeLength')->comment('竞拍时长,单位分钟');
            $table->string('lDescription')->comment('拍品描述');
            $table->timestamps();
            $table->comment='牌品表';
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
        Schema::dropIfExists('lots');
    }
}
