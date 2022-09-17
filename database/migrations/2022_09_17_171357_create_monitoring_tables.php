<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitoring_tables', function (Blueprint $table) {
            $table->id('KODE_BA');
            $table->date('TANGGAL')->nullable();
            $table->integer('ACTUAL');
            $table->integer('TARGET');
            $table->integer('AVG_ACTUAL');
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
        Schema::dropIfExists('monitoring_tables');
    }
}
