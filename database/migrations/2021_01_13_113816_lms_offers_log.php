<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LmsOffersLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lms_offers_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('leadID');
            $table->integer('affiliateID');
            $table->integer('offerID');
            $table->char('aff_sub1', 255);
            $table->char('aff_sub2', 255);
            $table->char('aff_sub3', 255);
            $table->char('aff_sub4', 255);
            $table->char('aff_sub5', 255);
            $table->char('transactionId', 255);
            $table->char('conversions', 255);
            $table->char('totalCost', 255);
            $table->char('totalRevenue', 255);
            $table->char('affiliatePostbackUrl');
            $table->ipAddress('ipaddress');
            $table->char('httpReferer', 255);
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
