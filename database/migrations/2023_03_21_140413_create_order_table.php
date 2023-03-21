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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_received_id')->comment('受注番号');
            $table->dateTime('order_received_day')->comment('受注日');
            $table->string('department_id')->comment('部門コード');
            $table->string('customer_id')->comment('顧客コード');
            $table->string('member_id')->comment('社員コード');
            $table->date('desired_dalivary_day')->comment('希望納期');
            $table->string('customer_order_number')->comment('客先注文番号');
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
        Schema::dropIfExists('orders');
    }
};
