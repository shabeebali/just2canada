<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilledWorkerFinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skilled_worker_finance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skilled_worker_id');
            $table->unsignedInteger('net_worth');
            $table->unsignedInteger('has_experience')->nullable();
            $table->unsignedInteger('managerial_experience')->nullable();
            $table->unsignedInteger('no_of_staff')->nullable();
            $table->unsignedInteger('own_business')->nullable();
            $table->unsignedInteger('percent_of_business')->nullable();
            $table->unsignedInteger('annual_sale')->nullable();
            $table->unsignedInteger('annual_income')->nullable();
            $table->unsignedInteger('net_assets')->nullable();
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
        Schema::dropIfExists('skilled_worker_finance');
    }
}
