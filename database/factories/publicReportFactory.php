<?php

namespace Database\Factories;

use App\Models\publicReport;
use Illuminate\Database\Eloquent\Factories\Factory;

class publicReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = publicReport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reportTitle' => $this->faker->name,
            'reportFile' => 'file.pdf',
            'imageFile' => 'design/pdf.png',
            'reportStatus' => 1,
        ];
    }
}
