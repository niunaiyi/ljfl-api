<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->bigIncrements('id')->comment('用户ID');
      $table->string('username', 20)->unique()->nullable()->comment('用户名称');
      $table->string('password', 60)->nullable()->comment('用户密码');
      $table->string('realname', 20)->nullable()->comment('真实名称');
      $table->string('phonenumber', 20)->unique()->nullable()->comment('联系方式');
      $table->integer('address_id')->nullable()->comment('所属地址');
      $table->rememberToken()->comment('记住用户');
      $table->softDeletes();
      $table->timestamp('created_at')->useCurrent();
      $table->timestamp('updated_at')->useCurrent();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::drop('users');
  }
}
