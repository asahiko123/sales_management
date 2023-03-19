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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_code')->comment('顧客コード');
            $table->string('billing_code')->comment('請求先コード');
            $table->integer('members_id')->comment('自社担当者ID');
            $table->string('representative')->comment('顧客担当者名');
            $table->string('phone_number')->comment('顧客電話番号');
            $table->string('fax_number')->comment('顧客FAX番号');
            $table->string('email')->comment('顧客メールアドレス');
            $table->string('customer_payment_category')->comment('顧客請求区分');
            $table->string('cut_off_date')->comment('顧客締日1');
            $table->string('payment_month')->comment('顧客支払月1');
            $table->string('payment_day')->comment('顧客支払日1');
            $table->string('cut_off_date')->comment('顧客締日2');
            $table->string('payment_month')->comment('顧客支払月2');
            $table->string('payment_day')->comment('顧客支払日2');
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
        Schema::dropIfExists('customers');
    }
};
