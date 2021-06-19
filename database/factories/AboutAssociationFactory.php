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
            'about'         => 'dfSvx8S ZLt4hrF 1wi2pDNKh 8Inv7hZD agk0dDx e6e3csa3b RItH1DGk uPvZW3d akK5OZQSaz6mFI GzL6iS M CwG3 htS5 g1yP mWOAp',
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
            'vison'=>    'dfSvx8S ZLt4hrF 1wi2pDNKh 8Inv7hZD agk0dDx e6e3csa3b RItH1DGk uPvZW3d akK5OZQSaz6mFI GzL6iS M CwG3 htS5 g1yP mWOAp',
            'message'=>  'dfSvx8S ZLt4hrF 1wi2pDNKh 8Inv7hZD agk0dDx e6e3csa3b RItH1DGk uPvZW3d akK5OZQSaz6mFI GzL6iS M CwG3 htS5 g1yP mWOAp',
            'associationStatus' => 1,
            'showInHome' => 1,

        ];
    }
}
