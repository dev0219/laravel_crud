<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LmsCallcenter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lms_callcenter', function (Blueprint $table) {
            $table->id();
            $table->char('email');
            $table->char('password');
            $table->char('firstName');
            $table->char('lastName');
            $table->char('company');
            $table->integer('phone');
            $table->char('address');
            $table->char('city');
            $table->char('state');
            $table->char('zipcode');
            $table->char('country');
            $table->char('status');
            $table->char('currencyType');
            $table->string('offerDestinationURL');
            $table->string('leadType');
            $table->string('buyerID');
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
        //
    }
}
