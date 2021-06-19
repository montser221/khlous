<?php

namespace Database\Factories;

use App\Models\Projects;
use App\Models\ProjectsCategories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ProjectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'projectName'       => $this->faker->name,
            'whatsapp'          => $this->faker->phoneNumber(),
            'projectLocation'   => Str::random(10),
            'projectCategoryId' => ProjectsCategories::all()->random()->categoryId,
            // 'projectCategoryId' => rand(1,2),
            'projectDesc'       => Str::random(10),
            'projectImage'      => 'design/mv.png',
            'projectIcon'       => 'design/rando.png',
            'projectCost'       => rand(10000,110000000),
            'projectText'       => $this->faker->paragraph(),
            'projectStatus'     =>1,
            // 'projectImage'      => $this->faker->image(),
            // 'projectIcon'       =>  $this->faker->image(),
        ];
    }
}
