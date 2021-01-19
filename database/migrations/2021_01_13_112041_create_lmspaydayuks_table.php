<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLmspaydayuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lmspaydayuks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('affiliateID');
            $table->char('subID', 255);
            $table->integer('buyerID');
            $table->integer('buyerTierID');
            $table->float('affiliateLeadPrice');
            $table->float('buyerLeadPrice');
            $table->tinyInteger('leadStatus');
            $table->date('cDate');
            $table->char('tier');
            $table->char('nameTitle', 255);
            $table->char('firstName', 255);
            $table->char('lastName', 255);
            $table->char('email', 255);
            $table->char('phone', 255);
            $table->char('address', 255);
            $table->char('houseNumber', 255);
            $table->char('street', 255);
            $table->char('locality', 255);
            $table->char( 'city', 255);
            $table->char('state', 255);
            $table->char('county', 255);
            $table->char('zip', 255);
            $table->date('dob');
            $table->tinyInteger('gender');
            $table->char('maritalStatus', 255);
            $table->char('dependants', 255);
            $table->char('mobile', 255);
            $table->char('ssn', 255);
            $table->char( 'rentown', 255);
            $table->char('stayMonth', 2);
            $table->char('stayYear', 2);
            $table->char('licenseNumber', 255);
            $table->char('licenseState', 255);
            $table->integer('bestTimeContact');
            $table->char( 'mortrent', 255);
            $table->char('employer', 255);
            $table->char('jobTitle', 255);
            $table->char('workPhone', 255);
            $table->char('employmentMonth', 2);
            $table->char('employmentYear', 2);
            $table->char('incomeType', 255);
            $table->char('incomePaymentType', 255);
            $table->char('incomeCycle', 255);
            $table->char('monthlyIncome', 255);
            $table->date( 'nextPayDate1');
            $table->date( 'nextPayDate2');
            $table->tinyInteger( 'inMilitary');
            $table->char('monthlyRepayments', 255);
            $table->char( 'monthlyUtilities', 255);
            $table->char( 'monthlyTransport', 255);
            $table->char( 'monthlyFood', 255);
            $table->char( 'otherExpense', 255);
            $table->char( 'bankName', 255);
            $table->char('bankAccountNumber', 255);
            $table->char('bankRoutingNumber', 255);
            $table->char('bankPhone', 255);
            $table->tinyInteger('bankMonthYear');
            $table->tinyInteger('accountType');
            $table->char('loanPurpose', 255);
            $table->char('loanAmount', 255);
            $table->char('loanTerms', 255);
            $table->tinyInteger('agreeCreditCheck');
            $table->ipAddress( 'ipaddress');
            $table->tinyInteger('isRedirected');
            $table->char('redirectUrl', 1200);
            $table->char( 'url', 255);
            $table->char('bankCode', 255);
            $table->char('cardType', 255);
            $table->char('jobIndustry', 255);
            $table->tinyInteger('bankruptcy');
            $table->tinyInteger('cosigner');
            $table->char('ref_first_name_1', 255);
            $table->char('ref_last_name_1', 255);
            $table->char('ref_phone_1', 255);
            $table->char('ref_relation_1', 255);
            $table->char('ref_first_name_2', 255);
            $table->char('ref_last_name_2', 255);
            $table->char('ref_phone_2', 255);
            $table->char('ref_relation_2', 255);
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
        Schema::dropIfExists('lmspaydayuks');
    }
}
