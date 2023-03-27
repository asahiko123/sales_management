<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->comment('商品分類ID');
            $table->string('category_code')->comment('商品コード');
            $table->string('product_name')->comment('商品名');
            $table->integer('unit_price')->comment('販売単価');
            $table->integer('cost_price')->comment('売上原価');
            $table->string('stock_management')->comment('在庫管理対象区分');
            $table->string('stock_reserve')->comment('在庫引当区分');
            $table->string('comment')->comment('備考');
            $table->integer('tax')->comment('税区分');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
