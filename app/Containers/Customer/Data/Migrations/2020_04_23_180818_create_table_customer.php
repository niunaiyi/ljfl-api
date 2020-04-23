<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCustomer extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function (Blueprint $table) {
			$table->bigIncrements('id')->comment('用户ID');
			$table->string('nickname', 20)->nullable()->comment('用户昵称');
			$table->string('realname', 20)->nullable()->comment('真实名称');
			$table->string('openid', 40)->nullable()->unique('users_wechatid_unique')->comment('微信openid');
			$table->string('phonenumber', 20)->nullable()->unique('users_mobile_unique')->comment('联系方式');
			$table->integer('score')->default(0);
			$table->timestamp('created_at')->useCurrent();
			$table->timestamp('updated_at')->useCurrent();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('customers');
	}
}
