<?php


use Database\Seeders\BuyerSeeder;
use Database\Seeders\LmspaydayukSeeder;
use Database\Seeders\OfferSeeder;
use Database\Seeders\PartnerSeeder;
use Database\Seeders\PubbuyermappingSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BuyerSeeder::class,
            LmspaydayukSeeder::class,
            PartnerSeeder::class,
            PubbuyermappingSeeder::class,
            OfferSeeder::class,
        ]);
    }
}
