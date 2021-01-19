<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckStatusLoggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lms_check_status_loggers', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->unsignedBigInteger('lead_id');
              $table->char('country_code', 2);
              $table->char('request_client_issued_at', 255);
              $table->char('request_affiliate_received_at', 255);
              $table->char('request_affiliate_issued_at', 255);
              $table->char('request_api_received_at', 255);
              $table->char('response_api_issued_at', 255);
              $table->char('response_affiliate_received_at', 255);
              $table->char('response_affiliate_issued_at', 255);
              $table->char('response_client_received_at', 255);
              $table->char('response_progress_percentage', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_status_loggers');
    }
}
