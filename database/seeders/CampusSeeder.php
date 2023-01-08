<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Database\Seeder;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campus::create(['name' => 'UMP Pekan']);
        Campus::create(['name' => 'UMP Gambang']);
    }
}
