<?php

namespace Database\Factories;

use App\Models\Policies;
use Illuminate\Database\Eloquent\Factories\Factory;

class PoliciesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Policies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'policyTitle'=>  $this->faker->name,
            'policyImage'=> 'design/pdf.png',
            'policyFile'=> 'file.pdf',
            'policyStatus'=> 1,
        ];
    }
}
