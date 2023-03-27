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
        Schema::create('shipping_destinations', function (Blueprint $table) {
            $table->id();
            $table->string('customer_code')->comment('取引先コード');
            $table->string('customer_id')->comment('出荷先番号');
            $table->string('shipping_destination')->comment('出荷先名');
            $table->string('shipping_destination_adress')->comment('出荷先住所');
            $table->string('shipping_destination_adress_2')->comment('出荷先住所2');
            $table->string('shipping_destination_zip_code')->comment('出荷先郵便番号');
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
        Schema::dropIfExists('shipping_destinations');
    }
};
