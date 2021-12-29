<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilledWorkerEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skilled_worker_education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skilled_worker_id');
            $table->unsignedInteger('highest_level');
            $table->string('name_of_diploma');
            $table->string('aos');
            $table->string('cos');
            $table->unsignedInteger('toei');
            $table->unsignedInteger('completed_post_sec');
            $table->unsignedInteger('post_sec_period')->nullable();
            $table->string('name_of_bachelor_degree');
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
        Schema::dropIfExists('skilled_worker_education');
    }
}
