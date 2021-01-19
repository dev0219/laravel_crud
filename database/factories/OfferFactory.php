<?php

namespace Database\Factories;

use App\Offer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Offer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name'=> 'myLoans',
        'site_link'=> 'https://www.my-loans.co.uk',
        'site_from_link'=> 'https://www.my-loans.co.uk',
        'expiration_date'=> '12/12/2021',
        'status'=> 'Active',
        'offer_type'=> 'live',
        'payout_type'=> 'Revenue Share - CPS',
        'payout_amount'=> '90%',
        'revenue_type'=> 'Revenue Share - CPS',
        'revenue_amount'=> '100%',
        ];
    }
}
