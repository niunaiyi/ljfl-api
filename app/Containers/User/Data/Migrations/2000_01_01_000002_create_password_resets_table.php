<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasswordResetsTable extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('password_resets', function (Blueprint $table) {
      $table->string('username')->index();
      $table->string('phonenumber')->index();
      $table->string('token')->index();
      $table->timestamp('created_at')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::drop('password_resets');
  }
}
