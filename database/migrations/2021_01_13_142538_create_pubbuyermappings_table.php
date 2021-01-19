<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePubbuyermappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pubbuyermappings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('leadType');
            $table->integer('affiliateID');
            $table->integer('buyerID');
            $table->integer('buyerSetupID');
            $table->integer('tiers');
            $table->char('status');
            $table->enum('route', ['Gold', 'Silver', 'Bronze', 'Test']);
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
        Schema::dropIfExists('pubbuyermappings');
    }
}
