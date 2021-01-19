<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->char('firstName', 50);
            $table->char('lastName', 50);
            $table->char('email')->unique();
            $table->integer('phone')->unique();
            $table->char('company', 100)->nullable();
            $table->char('address', 255);
            $table->char('city', 255);
            $table->char('state', 255);
            $table->char('country', 255);
            $table->char('postcode', 255)->nullable();
            $table->char('trafficSource', 255);
            $table->char('status', 255);
            $table->char('tiers', 255); // foreign

//            $table->unsignedBigInteger('user')-

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
        Schema::dropIfExists('buyers');
    }
}
