<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLmsBuyerSetupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyersetups', function (Blueprint $table) {
            $table->id();
            $table->string('leadType');
            $table->integer('buyerID');
            $table->string('buyerName');
            $table->integer('posting_order');
            $table->char('parameter1');
            $table->char('parameter2');
            $table->char('parameter3');
            $table->char('ping_url_test');
            $table->char('post_url_test');
            $table->char('ping_url_live');
            $table->char('post_url_live');
            $table->integer('timeout');
            $table->tinyInteger('mode');
            $table->tinyInteger('status');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('lms_buyet_setup');
    }
}
