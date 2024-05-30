<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergencyPhoneNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency_phone_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('fio');
            $table->string('role');
            $table->string('phone_number');
            $table->unsignedBigInteger('quarter_id');
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
        Schema::dropIfExists('emergency_phone_numbers');
    }
}