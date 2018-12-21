<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mName')->comment('管理员昵称');
            $table->string('mPassword')->comment('管理员密码');
            $table->string('phoneTel')->comment('管理员电话');
            $table->string('mEmail')->comment('管理员邮箱');
            $table->timestamps();
            $table->comment='管理员表';
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
        Schema::dropIfExists('manages');
    }
}
