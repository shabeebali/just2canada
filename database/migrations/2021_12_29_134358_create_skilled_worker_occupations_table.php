<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilledWorkerOccupationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skilled_worker_occupations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skilled_worker_id');
            $table->string('job_title');
            $table->unsignedInteger('duration');
            $table->unsignedInteger('location');
            $table->unsignedInteger('currently_working');
            $table->unsignedInteger('qualified_for_social_security');
            $table->string('type_of_employment')->nullable();
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
        Schema::dropIfExists('skilled_worker_occupations');
    }
}
