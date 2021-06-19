<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shortText' => 'this is short text',
            'memberName' => $this->faker->name,
            'memberImage' => 'design/facebook.png',
            'memberStatus' => 1,
        ];
    }
}
