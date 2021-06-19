<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Arrow::factory(15)->create();
    }
}
