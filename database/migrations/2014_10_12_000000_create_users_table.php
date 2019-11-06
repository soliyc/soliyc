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
        Schema::create("language", function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('language_id');
            $table->string('name');
            $table->string('code');
            $table->string('locale');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create("group", function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('status');
            $table->integer('deleted');
            $table->timestamps();
        });

        Schema::create("group_description", function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('group')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('language_id')->unsigned();
            $table->foreign('language_id')->references('id')->on('language')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name', 255);
            $table->string('description');
            $table->timestamps();
        });

        Schema::create("role", function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('status');
            $table->integer('deleted');
            $table->timestamps();
        });

        Schema::create("role_description", function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('language_id')->unsigned();
            $table->foreign('language_id')->references('id')->on('language')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name', 255);
            $table->string('description');
            $table->timestamps();
        });

        Schema::create("group_role", function (Blueprint $table) {
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('group')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('first_name')->unique();
            $table->string('last_name')->unique();
            $table->string('phone')->unique();
            $table->timestamp('phone_verified_at')->nullable();
            $table->integer('status');
            $table->integer('deleted');
            $table->bigInteger('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('group')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('language_id')->unsigned();
            $table->foreign('language_id')->references('id')->on('language')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('group');
        Schema::dropIfExists('group_description');
        Schema::dropIfExists('role');
        Schema::dropIfExists('role_description');
        Schema::dropIfExists('group_role');
        Schema::dropIfExists('language');
    }
}
