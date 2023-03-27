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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('members_code')->comment('社員コード');
            $table->string('name')->comment('社員名');
            $table->string('phone_number')->comment('電話番号');
            $table->string('fax_number')->commnet('FAX');
            $table->string('email')->comment('メールアドレス');
            $table->string('emargency_contact_phone')->comment('緊急連絡先');
            $table->unsignedBigInteger('department_id')->comment('所属部門ID');
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
        Schema::dropIfExists('members');
    }
};
