<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(['name' => 'Balok']);
        City::create(['name' => 'Bandar Bera']);
        City::create(['name' => 'Bandar Pusat Jengka']);
        City::create(['name' => 'Bandar Tun Abdul Razak']);
        City::create(['name' => 'Benta']);
        City::create(['name' => 'Bentong']);
        City::create(['name' => 'Brinchang']);
        City::create(['name' => 'Bukit Fraser']);
        City::create(['name' => 'Bukit Goh']);
        City::create(['name' => 'Bukit Kuin']);
        City::create(['name' => 'Chenor']);
        City::create(['name' => 'Chini']);
        City::create(['name' => 'Damak']);
        City::create(['name' => 'Dong']);
        City::create(['name' => 'Gambang']);
        City::create(['name' => 'Genting Highlands']);
        City::create(['name' => 'Jerantut']);
        City::create(['name' => 'Karak']);
        City::create(['name' => 'Kemayan']);
        City::create(['name' => 'Kuala Krau']);
        City::create(['name' => 'Kuala Lipis']);
        City::create(['name' => 'Kuala Rompin']);
        City::create(['name' => 'Kuantan']);
        City::create(['name' => 'Lanchang']);
        City::create(['name' => 'Lurah Bilut']);
        City::create(['name' => 'Maran']);
        City::create(['name' => 'Mentakab']);
        City::create(['name' => 'Muadzam Shah']);
        City::create(['name' => 'Padang Tengku']);
        City::create(['name' => 'Pekan']);
        City::create(['name' => 'Raub']);
        City::create(['name' => 'Ringlet']);
        City::create(['name' => 'Sega']);
        City::create(['name' => 'Sungai Koyan']);
        City::create(['name' => 'Sungai Lembing']);
        City::create(['name' => 'Tanah Rata']);
        City::create(['name' => 'Temerloh']);
        City::create(['name' => 'Triang']);
    }
}
