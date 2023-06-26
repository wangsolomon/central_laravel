<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Test', function (Blueprint $table) {
            Schema::dropIfExists('Test');
            $table->string('屬性');
            $table->string('星期');
            $table->integer('基準1週次');
            $table->date('基準1日期');
            $table->integer('基準2週次');
            $table->date('基準2日期');
            $table->integer('基準資料數');
            $table->integer('基準車流量');
            $table->integer('基準平均');
            $table->integer('比較週次');
            $table->date('比較之日期');
            $table->integer('比較之資料數');
            $table->integer('比較之車流量');
            $table->integer('比較之平均');
            $table->integer('差異車流量');
            $table->string('差異幅度');
            $table->integer('平均差異車流量');
            $table->string('平均差異幅度');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Test');
    }
};
