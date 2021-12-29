<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilledWorkerWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skilled_worker_work', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skilled_worker_id');
            $table->unsignedInteger('been_temp_foreign_worker');
            $table->unsignedInteger('years_as_full_time')->nullable();
            $table->unsignedInteger('employed_in_canada')->nullable();
            $table->unsignedInteger('when_left_job')->nullable();
            $table->unsignedInteger('arranged');
            $table->unsignedInteger('noc')->nullable();
            $table->unsignedInteger('has_qualification_certificate');
            $table->unsignedInteger('has_nomination_certificate');
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
        Schema::dropIfExists('skilled_worker_work');
    }
}
