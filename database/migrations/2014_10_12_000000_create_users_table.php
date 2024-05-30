<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quarter_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('email')->unique();
            $table->string('provider_id')->nullable();
            $table->string('image')->default('image/user-128.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            // $table->boolean('is_admin')->default(false);
            $table->boolean('active_status')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}