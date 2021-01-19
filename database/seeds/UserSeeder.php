<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john' . random_int(1, 1000) . '@doe.com',
            'password' => Hash::make('12345'),
            'company' => 'XYZ Limited',
            'address' => '13 Old Street',
            'city' => 'London',
            'state' => 'London',
            'postcode' => 'EC1V 9BD',
            'country' => 'United Kingdom',
            'email_verified_at' => now(),
        ]);
    }
}
