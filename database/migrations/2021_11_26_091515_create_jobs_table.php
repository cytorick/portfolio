<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('function');
            $table->string('image');
            $table->string('street');
            $table->string('place');
            $table->string('website');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('contract_type')->nullable();
            $table->boolean('is_active')->default(0);
            $table->boolean('featured')->default(0);
            $table->boolean('archived')->default(0);
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
        Schema::dropIfExists('jobs');
    }
}
