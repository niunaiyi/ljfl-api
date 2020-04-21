<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressTables extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('addresses', function (Blueprint $table) {
      $table->bigIncrements('id')->comment('行政区划ID');
      $table->string('name', 100)->comment('行政区划名称')->nullable(false);
      $table->bigInteger('dzlx_value')->index('address_dzlx_value')->default('101007')->nullable(false)->comment('类型');
      $table->bigInteger('hylx_value')->index('address_hylx_value')->default('102001')->nullable(false)->comment('行业类型');
      $table->json('position')->nullable(true)->default(null);
      $table->string('parent_name')->index('address_parent_name')->nullable(true)->default(null)->comment('上级节点');
      $table->timestamp('created_at')->useCurrent();
      $table->timestamp('updated_at')->useCurrent();

//        $query = 'ALTER TABLE addresses ALTER COLUMN parent_name TYPE "ltree" USING "parent_name"::"ltree";';
//        $query = 'CREATE EXTENSION ltree;';
//        \Illuminate\Support\Facades\DB::connection()->getPdo()->exec($query);

    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('addresses');
  }
}
