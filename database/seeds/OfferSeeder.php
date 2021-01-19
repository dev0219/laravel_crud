<?php

namespace Database\Seeders;

use App\Offer;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offer = Offer::factory()
            ->count(50)
            ->create();
    }
}
