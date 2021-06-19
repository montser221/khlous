<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutAssociationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AboutAssociation::factory(1)->create();
    }
}
