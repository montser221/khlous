<?php

namespace Database\Factories;

use App\Models\AboutAssociation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AboutAssociationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AboutAssociation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'about'         => Str::random(100),
            'location'      =>  Str::random(10),
            'associationTitle'=> $this->faker->name,
            'managerWord'   => $this->faker->paragraph(),
            'showInHome'      =>0,
            'managerName'   => $this->faker->name,
            'associationIcon'  => 'design/rando.png',
            'visonIcon'=>   'design/avatar-04.jpg',
            'messageIcon'=>   'design/avatar-04.jpg',
            'visonImage' => 'design/vison.jpg',
            'messageImage' => 'design/message.jpg',
            'vison'=>    Str::random(80),
            'message'=>  Str::random(80),
            'associationStatus' => 1,
            'showInHome' => 1,

        ];
    }
}
