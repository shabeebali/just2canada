<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilledWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skilled_workers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('firstname');
            $table->string('lastname');
            $table->unsignedInteger('salution');
            $table->date('dob');
            $table->date('spouse_dob')->nullable();
            $table->unsignedInteger('marital_status');
            $table->foreignId('country_id')->constrained();
            $table->foreignId('resident_country_id')->constrained('countries');
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('hear_us');
            $table->json('aoi')->nullable();
            $table->text('further_info')->nullable();
            $table->string('resume_uri')->nullable();
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
        Schema::dropIfExists('skilled_workers');
    }
}
