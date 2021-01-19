<?php

namespace Database\Seeders;

use App\Buyer;
use App\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partner = Partner::factory()
            ->count(50)
            ->create();
    }
}
