<?php

namespace Database\Factories;

use App\Models\Arrow;
use App\Models\Projects;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArrowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Arrow::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'arrowName'=> $this->faker->name,
            'arrowValue'=> rand(100,3000),
            'projectTable'=> Projects::all()->random()->projectId,
            'arrowStatus'=> rand(0,1),
        ];
    }
}
