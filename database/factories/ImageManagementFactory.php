<?php

namespace Database\Factories;

use App\Models\ImageManagement;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageManagementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ImageManagement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imageTitle'=> $this->faker->name,
            'imageFile'=> 'design/back-msg.png',
            'imageStatus'=> 1,
        ];
    }
}
