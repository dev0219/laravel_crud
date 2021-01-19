<?php

namespace Database\Seeders;


use App\Pubbuyermapping;
use Illuminate\Database\Seeder;

class PubbuyermappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pubbuyer = Pubbuyermapping::factory()
            ->count(50)
            ->create();
    }
}
