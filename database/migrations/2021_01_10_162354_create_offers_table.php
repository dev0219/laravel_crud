<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('site_link', 255);
            $table->string('site_from_link', 255);
            $table->timestamp('expiration_date');
            $table->string('status', 15)->default('active');
            $table->string('offer_type', 15)->default('live');
            $table->string('payout_type', 50)->default('cps_cost_per_sale');
            $table->string('payout_amount', 100)->nullable();
            $table->string('revenue_type', 50)->default('revenue_per_sale');
            $table->string('revenue_amount', 100)->nullable();
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
        Schema::dropIfExists('offers');
    }
}
