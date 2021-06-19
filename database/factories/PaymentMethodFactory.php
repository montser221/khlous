<?php

namespace Database\Factories;

use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PaymentMethodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PaymentMethod::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = ['design/visa.png','design/master.png','design/mada.png'];
        return [
           'methodName'=>$this->faker->name,
           'methodDesc'=> Str::random(10),
           'methodImage'=> function() use ($images){
               return $images[rand(0,2)];
            },
            'methodStatus'=> 1,
        ];
    }
}
