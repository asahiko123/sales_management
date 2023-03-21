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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string('order_details_id')->comment('受注明細ID');
            $table->integer('order_row_id')->comment('受注行番号');
            $table->string('product_id')->comment('商品名');
            $table->integer('unit_price')->comment('販売単価');
            $table->integer('cost_price')->comment('売上原価');
            $table->integer('tax_rate')->comment('消費税率');
            $table->integer('product_allocation')->comment('引当数量');
            $table->integer('shipment')->comment('出荷済み数量');
            $table->integer('completion')->comment('完了フラグ');
            $table->integer('discount')->comment('値引き額');
            $table->date('dalivary_day')->comment('納期');
            $table->string('updater')->comment('更新者名');
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
        Schema::dropIfExists('order_details');
    }
};
