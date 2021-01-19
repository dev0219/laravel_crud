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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->string('password');
            $table->rememberToken()->nullable();
            $table->string('company', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->char('city', 255)->nullable();
            $table->char('state', 255)->nullable();
            $table->char('postcode', 255)->nullable();
            $table->char('country', 255)->nullable();
            $table->char('status', 255)->nullable();
            $table->char('website', 255)->nullable();
            $table->date('dob')->nullable();
            $table->enum('trafficSource', ['PPC', 'Display', 'Email', 'SMS'])->nullable();
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
