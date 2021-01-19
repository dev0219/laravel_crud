<?php

namespace Database\Factories;

use App\Pubbuyermapping;
use Illuminate\Database\Eloquent\Factories\Factory;

class PubbuyermappingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pubbuyermapping::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
       'leadType' => 'Payday UK',
       'affiliateID' => '101',
       'buyerID' => '500',
       'buyerSetupID' => '1',
       'tiers' => '10',
       'status' => 'Active',
       'route' => 'Gold',

        ];
    }
}
