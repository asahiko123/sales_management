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
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->date('start_date')->comment('開始日');
            $table->date('end_date')->comment('終了日');
            $table->string('department_code')->comment('部門コード');
            $table->string('department_name')->comment('部門名');
            $table->string('upper_depertment')->comment('上位部門コード');
            $table->string('team_layer')->comment('組織階層');
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
        Schema::dropIfExists('department');
    }
};
