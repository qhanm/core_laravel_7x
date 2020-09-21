<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('name', 255);
           $table->string('username', 100);
           $table->string('email', 50);
           $table->string('avatar', 255)->nullable(true);
           $table->timestamp('email_verified_at');
           $table->string('password');
           $table->rememberToken();
           $table->softDeletes();

           $table->unique('email');
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
