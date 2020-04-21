<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDictTables extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('dicts', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('type', 40)->comment('类型');
      $table->string('name', 40)->comment('名称');
      $table->string('code', 40)->comment('编码');
      $table->string('desc', 40)->comment('说明');
      $table->bigInteger('value')->unique()->comment('值');
      $table->timestamp('created_at')->useCurrent();
      $table->timestamp('updated_at')->useCurrent();

      $table->index('value');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('dicts');
  }
}
