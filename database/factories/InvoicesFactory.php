<?php

namespace Database\Factories;

use App\Invoices;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoices::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'Amount' => $this->faker->randomNumber(),
        'Date' => '12/12/2021',
        'Partner' => 'affiliate 101',
        'Customer' => 'XYZ Limited',
        'Status' => 'PAID',
        ];
    }
}
