<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDropTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
	    Schema::create('drops', function(Blueprint $table)
	    {
		    $table->bigInteger('id', true)->unsigned();
		    $table->bigInteger('customer_id')->unsigned()->comment('居民ID');
		    $table->bigInteger('device_id')->unsigned()->comment('设备ID');
		    $table->bigInteger('user_id')->nullable()->comment('用户ID');;
		    $table->integer('ljlx_value')->unsigned()->comment('垃圾分类');
		    $table->integer('ljxl_value')->unsigned()->comment('垃圾分类小类');
		    $table->integer('jlbz_value')->unsigned()->comment('计量标准')->default(105002);
		    $table->integer('amount')->unsigned()->comment('投放数量')->default(1);
		    $table->timestamp('created_at')->useCurrent();
		    $table->timestamp('updated_at')->useCurrent();
	    });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('drops');
    }
}
