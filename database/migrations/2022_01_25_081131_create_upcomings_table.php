<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpcomingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcomings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->string('official_url')->nullable();
            $table->string('official_twitter')->nullable();
            $table->string('openSea_link')->nullable();
            $table->string('maximum_number')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->text('short_description')->nullable();
            $table->string('tell_us')->nullable();
            $table->string('project_differences')->nullable();
            $table->string('projects_roadmap')->nullable();
            $table->string('links_images')->nullable();
            $table->string('blockchain')->nullable();
            $table->string('derivative')->nullable();
            $table->string('status')->nullable();
            $table->string('fetured_status')->nullable();
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
        Schema::dropIfExists('upcomings');
    }
}
