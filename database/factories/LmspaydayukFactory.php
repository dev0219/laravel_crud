<?php

namespace Database\Factories;

use App\Lmspaydayuk;
use Illuminate\Database\Eloquent\Factories\Factory;

class LmspaydayukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lmspaydayuk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'affiliateID' => '10001',
            'subID' => '101',
            'buyerID' => '0050',
            'buyerTierID' => '10',
            'affiliateLeadPrice' => '12.00',
            'buyerLeadPrice' => '15.00',
            'leadStatus' => '1',
            'cDate' => '12/12/2021',
            'tier' => '10',
            'nameTitle' => $this->faker->title,
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'houseNumber' => $this->faker->randomNumber(),
            'street' => $this->faker->streetAddress,
            'locality' => $this->faker->city,
             'city' => $this->faker->city,
            'state' => $this->faker->state,
            'county' => $this->faker->country,
            'zip' => $this->faker->postcode,
            'dob' => '12/12/1980',
            'gender' => 'male',
            'maritalStatus' => 'married',
            'dependants' => '2',
            'mobile' => $this->faker->phoneNumber,
            'ssn' => '123455678',
             'rentown' => 'Homeowner',
            'stayMonth' => '2',
            'stayYear' => '2',
            'licenseNumber' => $this->faker->randomNumber(),
            'licenseState' => $this->faker->city,
            'bestTimeContact' => 'any',
             'mortrent' => 'any',
            'employer' => $this->faker->company,
            'jobTitle' => $this->faker->jobTitle,
            'workPhone' => $this->faker->phoneNumber,
            'employmentMonth' => '2',
            'employmentYear' => '2',
            'incomeType' => 'Full Time Employment',
            'incomePaymentType' => 'any',
            'incomeCycle' => 'Weekly',
            'monthlyIncome' => '2500',
             'nextPayDate1' =>'12/12/2021',
             'nextPayDate2' =>'19/12/2021',
             'inMilitary' =>'any',
            'monthlyRepayments' => $this->faker->randomNumber(),
             'monthlyUtilities' => $this->faker->randomNumber(),
             'monthlyTransport' => $this->faker->randomNumber(),
             'monthlyFood' => $this->faker->randomNumber(),
             'otherExpense' => $this->faker->randomNumber(),
             'bankName' => $this->faker->name,
            'bankAccountNumber' => $this->faker->bankAccountNumber,
            'bankRoutingNumber' => $this->faker->bankAccountNumber,
            'bankPhone' => $this->faker->phoneNumber,
            'bankMonthYear' => 'any',
            'accountType' =>'any',
            'loanPurpose' => 'Debt Consolidation',
            'loanAmount' => '500',
            'loanTerms' => '12',
            'agreeCreditCheck' => '1',
            'ipaddress' => $this->faker->ipv4,
            'isRedirected' => '100%',
            'redirectUrl' => 'https:://example.com/redirecturl?=1234',
             'url' => $this->faker->url,
            'bankCode' => '12345678',
            'cardType' => ' Debit',
            'jobIndustry' => 'Finance',
            'bankruptcy' => '0',
            'cosigner' => '0',
            'ref_first_name_1' => $this->faker->firstName,
            'ref_last_name_1' => $this->faker->lastName,
            'ref_phone_1' => $this->faker->phoneNumber,
            'ref_relation_1' => 'Family',
            'ref_first_name_2' => $this->faker->firstName,
            'ref_last_name_2' => $this->faker->lastName,
            'ref_phone_2' => $this->faker->phoneNumber,
            'ref_relation_2' => 'Family',
        ];
    }
}
