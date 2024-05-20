<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_views', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quarter_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('clientView');
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
        Schema::dropIfExists('client_views');
    }
}
