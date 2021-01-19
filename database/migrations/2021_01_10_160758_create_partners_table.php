<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
                  $table->bigIncrements('id');
                  $table->char('email');
                  $table->char('password');
                  $table->char('firstName');
                  $table->char('lastName');
                  $table->char('company');
                  $table->char('phone');
                  $table->char('address');
                  $table->char('city');
                  $table->char('state');
                  $table->char('zipcode');
                  $table->char('country');
                  $table->char('status');
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
        Schema::dropIfExists('partners');
    }
}
