<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Comb Bind Notebook']);
        Category::create(['name' => 'Tape Bind Notebook']);
        Category::create(['name' => 'Certificate Printing']);
        Category::create(['name' => 'Thesis Hard Cover']);
        Category::create(['name' => 'Poster']);
    }
}
