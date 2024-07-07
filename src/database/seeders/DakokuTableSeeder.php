<?php

namespace Database\Seeders;

use App\Models\Dakoku;
use Illuminate\Database\Seeder;

class DakokuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dakoku::factory()->count(35)->create();
    }
}
