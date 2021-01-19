<?php

namespace Database\Factories;


use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => 'john' . random_int(1, 1000) . '@doe.com',
            'password' => Hash::make('12345'),
            'company' => 'XYZ Limited',
            'address' => '13 Old Street',
            'city' => 'London',
            'state' => 'London',
            'postcode' => 'EC1V 9BD',
            'country' => 'United Kingdom',
            'email_verified_at' => now(),
        ];
    }
}
