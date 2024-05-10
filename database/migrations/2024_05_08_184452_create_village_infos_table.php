<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillageInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('village_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quarter_id');
            $table->string('what_reasons')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('additional_information')->nullable();
            $table->string('main_email')->nullable();
            $table->string('phone')->nullable();
            $table->string('map_location')->nullable();
            $table->integer('population')->nullable();
            $table->integer('youth')->nullable();
            $table->integer('retailers')->nullable();
            $table->integer('schools')->nullable();
            $table->integer('kindergartens')->nullable();
            $table->integer('mosques')->nullable();
            $table->integer('shops')->nullable();
            $table->integer('hospital')->nullable();
            $table->integer('other_services')->nullable();
            $table->string('video1')->nullable();
            $table->string('video1_image_cover')->nullable();
            $table->string('video2')->nullable();
            $table->string('video2_image_cover')->nullable();
            $table->foreign('quarter_id')->references('id')->on('quarters')->onDelete('cascade');
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
        Schema::dropIfExists('village_infos');
    }
}
