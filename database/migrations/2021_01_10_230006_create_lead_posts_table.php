<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lms_lead_post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('apiId');
            // apiPassword
            $table->integer('testMode');
            $table->integer('productId');
            $table->decimal('price');
            $table->integer('loanDurationMonths');
            $table->string('loanPurpose');
            $table->string('title', 4);
            $table->string('firstName', 50);
            $table->string('middleName', 50);
            $table->string('lastName', 50);
            $table->date('dob');
            $table->string('maritalStatus');
            $table->string('numberOfDependents');
            $table->integer('houseNumber');
            $table->string('houseName');
            $table->string('flatNumber');
            $table->string('street', 255);
            $table->string('city', 255);
            $table->string('county', 255);
            $table->string('postCode', 255);
            $table->string('residentialStatus', 255);
            $table->string('monthsAtAddress', 255);
            $table->string('homePhone', 255);
            $table->string('workPhone', 255);
            $table->string('cellPhone', 255);
            $table->string('email')->unique();
            $table->string('incomeType');
            $table->string('incomePaymentFrequency');
            $table->date('incomeNextDate1');
            $table->date('incomeNextDate2');
            $table->string('workCompanyName');
            $table->string('workIndustry');
            $table->string('workTimeAtEmployer');
            $table->string('workPosition');
            $table->integer('incomeNetMonthly');
            $table->integer('expenseHousing');
            $table->integer('expenseAllLoans');
            $table->integer('expenseUtilities');
            $table->integer('expenseTransport');
            $table->integer('expenseOther');
            $table->integer('bankSortCode');
            $table->integer('bankAccountNumber');
            $table->integer('bankDirectDeposit');
            $table->integer('bankDebitCardType');
            $table->boolean('consentCreditSearch');
            $table->boolean('consentFinancial');
            $table->boolean('thirdPartyEmail');
            $table->boolean('thirdPartyTextMessage');
            $table->boolean('thirdPartyPhone');
            $table->string('userAgent');
            $table->ipAddress('userIp');

            $table->uuid('transactionId');
            $table->unsignedBigInteger('lead_id');
            $table->unsignedBigInteger('affiliateId');
            $table->unsignedBigInteger('buyerId');
//            $table->integer('status');
            $table->enum('status', ['sold', 'reject', 'accept']);
            $table->string('redirect_url');
            $table->string('processing_time');

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
        Schema::dropIfExists('lead_post');
    }
}
