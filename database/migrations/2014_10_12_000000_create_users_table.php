<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name', 123);
            $table->string('email', 123)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 123);
            $table->string('is_admin', 123)->nullable();
            $table->string('role', 123)->nullable();
            $table->string('status', 123);
            $table->string('profile', 123);
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('street')->nullable();
            $table->string('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
