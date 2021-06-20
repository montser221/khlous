<?php

namespace Database\Factories;

use App\Models\pdfFile;
use Illuminate\Database\Eloquent\Factories\Factory;

class pdfFileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = pdfFile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fileTitle'=>  $this->faker->name,
            'imageFile'=> 'design/pdf.png',
            'pdfFile'=> 'file.pdf',
            'fileStatus'=> 1,
        ];
    }
}
