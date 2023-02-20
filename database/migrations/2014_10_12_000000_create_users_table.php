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
              $table->increments('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('phone');
            $table->string('adress');
            $table->string('balance')->default('0');
            $table->string('img');
            $table->string('login');
            $table->longText('lock')->default('');
            $table->string('valute');
            $table->boolean('type');
            $table->boolean('auth');
            $table->string('email',250)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unique('email', 'unique_email');
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
