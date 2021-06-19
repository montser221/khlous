<?php

namespace Database\Factories;

use App\Models\DenoatePayDetail;
use App\Models\Projects;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

class DenoatePayDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DenoatePayDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'denoatePhone'=>$this->faker->phoneNumber(),
            'denoateName'=>$this->faker->name,
            'projectTable'=> Projects::all()->random()->projectId,
            'paymentMethodTable'=> PaymentMethod::all()->random()->methodId,
            'moneyValue'=> rand(1,10000),
            'denoateStatus'=>1,
        ];
    }
}
