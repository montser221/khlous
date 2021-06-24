<?php

namespace Database\Seeders;

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
        // \App\Models\UsersCategories::create([
            // 'userCategoryName'=>'default'
        // ]);
        \App\Models\Settings::factory(1)->create();
        \App\Models\AboutAssociation::factory(1)->create();
        \App\Models\UsersCategories::factory(1)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\ProjectsCategories::factory(1)->create();
        \App\Models\Projects::factory(10)->create();
        \App\Models\Arrow::factory(15)->create();
        \App\Models\PaymentMethod::factory(4)->create();
        \App\Models\DenoatePayDetail::factory(100)->create();
        \App\Models\OurGoals::factory(10)->create();
        \App\Models\Member::factory(10)->create();
        \App\Models\Attendace::factory(7)->create();
        \App\Models\pdfFile::factory(20)->create();
        \App\Models\publicReport::factory(20)->create();
        \App\Models\Money::factory(20)->create();
        \App\Models\Policies::factory(20)->create();
        \App\Models\Statistics::factory(4)->create();
        \App\Models\ImageManagement::factory(20)->create();
        \App\Models\Agent::factory(4)->create();


    }
}
