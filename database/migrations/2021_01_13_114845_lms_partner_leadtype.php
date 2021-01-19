<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LmsPartnerLeadtype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lms_partner_leadtype', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('vid');
          $table->char('type', 255);
          $table->integer('status');
          $table->integer('margin');
          $table->char('duplicate', 255);
          $table->char('daytotal', 255);
          $table->integer('daylimit');
          $table->integer('weeklimit');
          $table->integer('monthlimit');
          $table->integer('daycredit');
          $table->integer('weekcredit');
          $table->integer('monthcredit');
          $table->integer('daylimitUsed');
          $table->integer('weeklimitUsed');
          $table->integer('monthlimitUsed');
          $table->integer('daycreditUsed');
          $table->integer('weekcreditUsed');
          $table->integer('monthcreditUsed');
          $table->float('thresoldAmount');
          $table->float('accumulatorAmount')->default('0');
          $table->float('accuCPAuk65');
          $table->float('accuCPAus100');
          $table->float('accuCPLuk9');
          $table->float('accuCPLus20');
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
