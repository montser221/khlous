<?php

namespace Database\Factories;

use App\Models\ProjectsCategories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectsCategoriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProjectsCategories::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categoryName'=>$this->faker->name,
        ];
    }
}
