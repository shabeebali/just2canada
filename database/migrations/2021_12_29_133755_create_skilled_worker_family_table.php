<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilledWorkerFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skilled_worker_family', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skilled_worker_id');
            $table->unsignedInteger('has_blood_relative');
            $table->unsignedInteger('relationship')->nullable();
            $table->unsignedInteger('relative_wish_to_sponsor')->nullable();
            $table->unsignedInteger('full_time_student')->nullable();
            $table->unsignedInteger('relative_age')->nullable();
            $table->unsignedInteger('relative_employment_status')->nullable();
            $table->unsignedInteger('people_relative_responsible')->nullable();
            $table->unsignedInteger('relative_annual_income')->nullable();
            $table->unsignedInteger('dependant_financial')->nullable();
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
        Schema::dropIfExists('skilled_worker_family');
    }
}
