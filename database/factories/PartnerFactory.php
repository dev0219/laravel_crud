<?php

namespace Database\Factories;

use App\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Partner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'email' => $this->faker->email,
        'password' => $this->faker->password,
        'firstName' => $this->faker->firstName,
        'lastName' => $this->faker->lastName,
        'company' => $this->faker->company,
        'phone' => $this->faker->phoneNumber,
        'address' => $this->faker->address,
        'city' => $this->faker->city,
        'state' => $this->faker->state,
        'zipcode' => $this->faker->postcode,
        'country' => $this->faker->country,
        'status' => 'Active'
        ];
    }
}
