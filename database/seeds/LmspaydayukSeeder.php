<?php

namespace Database\Seeders;


use App\Lmspaydayuk;
use Illuminate\Database\Seeder;

class LmspaydayukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lead = Lmspaydayuk::factory()
            ->count(50)
            ->create();
    }
}
