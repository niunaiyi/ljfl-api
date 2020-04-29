<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStationTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
		Schema::create('stations', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name',40)->nullable(true)->comment('名称');
			$table->bigInteger('address_id')->unsigned()->nullable(false)->comment('所属地址');
			$table->json('position')->nullable(true)->comment('经纬度');
			$table->bigInteger('user_id')->unsigned()->nullable(false)->comment('责任人');
			$table->timestamp('created_at')->useCurrent();
			$table->timestamp('updated_at')->useCurrent();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('stations');
    }
}
