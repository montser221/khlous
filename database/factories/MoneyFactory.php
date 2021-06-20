<?php

namespace Database\Factories;

use App\Models\Money;
use Illuminate\Database\Eloquent\Factories\Factory;

class MoneyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Money::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'reportTitle' => $this->faker->name,
            'reportPdfFile' => 'file.pdf',
            'reportImageFile' => 'design/pdf.png',
            'reportStatus' => 1,
        ];
    }
}
