<?php

namespace Database\Factories;

use App\Models\OurGoals;
use Illuminate\Database\Eloquent\Factories\Factory;

class OurGoalsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OurGoals::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'goal'=>$this->faker->name,
            'goalStatus'=> 1,
        ];
    }
}
