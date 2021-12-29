<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilledWorkerLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skilled_worker_language', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skilled_worker_id');
            $table->unsignedInteger('language_test')->nullable();
            $table->unsignedInteger('done_tef')->nullable();
            $table->json('general')->nullable();
            $table->json('ielts')->nullable();
            $table->json('celpip')->nullable();
            $table->json('general_french')->nullable();
            $table->json('french_tef')->nullable();
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
        Schema::dropIfExists('skilled_worker_language');
    }
}
