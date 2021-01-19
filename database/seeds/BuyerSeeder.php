<?php

namespace Database\Seeders;

use App\Buyer;
use App\User;
use Illuminate\Database\Seeder;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buyer = Buyer::factory()
            ->count(50)
            ->create();
    }
}
