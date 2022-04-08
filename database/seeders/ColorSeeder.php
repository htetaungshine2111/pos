<?php

namespace Database\Seeders;

use App\Models\Color;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Color::factory()->count(10000)->create();
    }
}
