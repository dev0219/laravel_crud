<?php

namespace Database\Factories;

use App\Buyersetup;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuyersetupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Buyersetup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'leadType' => 'Payday UK',
        'buyerID' => '0050',
        'buyerName' => 'Buyer Quid',
        'posting_order' => '1',
        'parameter1' => '123',
        'parameter2' => '456',
        'parameter3' => '789',
        'ping_url_test' => 'http://example.com/ping',
        'post_url_test' => 'http://example.com/post',
        'ping_url_live' => 'http://example.com/ping',
        'post_url_live' => 'http://example.com/post',
        'timeout' => '210',
        'mode' => '1',
        'status' => '1',
        'notes' => 'Requires parameters 1, 2, 3 etc..',
        ];
    }
}
