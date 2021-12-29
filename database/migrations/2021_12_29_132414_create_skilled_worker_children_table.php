<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilledWorkerChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skilled_worker_children', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('skilled_worker_id');
            $table->unsignedInteger('no_of_children');
            $table->decimal('child_1_age', 5, 1, TRUE)->nullable();
            $table->decimal('child_2_age', 5, 1, TRUE)->nullable();
            $table->decimal('child_3_age', 5, 1, TRUE)->nullable();
            $table->decimal('child_4_age', 5, 1, TRUE)->nullable();
            $table->decimal('child_5_age', 5, 1, TRUE)->nullable();
            $table->decimal('child_6_age', 5, 1, TRUE)->nullable();
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
        Schema::dropIfExists('skilled_worker_children');
    }
}
