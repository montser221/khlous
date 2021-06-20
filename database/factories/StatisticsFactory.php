<?php

namespace Database\Factories;

use App\Models\Statistics;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatisticsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Statistics::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sName' => $this->faker->name,
            'sValue' =>rand(1,1000),
            'sStatus' => 1,
        ];
    }
}
