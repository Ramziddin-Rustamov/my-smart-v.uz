<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoVillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_villages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quarter_id');
            $table->integer('number');
            $table->string('title');
            $table->string('image')->default('image/announcement/announcement.webp');
            $table->string('territory');
            $table->integer('workers_count');
            $table->integer('rooms');
            $table->string('condition');
            $table->text('about');
            $table->integer('customers');
            $table->timestamps();
            $table->foreign('quarter_id')->references('id')->on('quarters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_villages');
    }
}
