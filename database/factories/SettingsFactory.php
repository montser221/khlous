<?php

namespace Database\Factories;

use App\Models\Settings;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SettingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Settings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'foundationName' =>  Str::random(10),
            'foundationTitle' => $this->faker->title(),
            'email' => $this->faker->safeEmail(),
            'phone1' => $this->faker->phoneNumber(),
            'phone2' => $this->faker->phoneNumber(),
            'phone3' => $this->faker->phoneNumber(),
            'phoneNumber' => $this->faker->phoneNumber(),
             'facebook'=>'https://www.facebook.com/wdwd5',
             'twitter'=>'https://www.twitter.com/wdwd5',
             'instagram'=>'https://www.instagram.com/wdwd5',
             'linkedin'=>'https://www.linkedin.com/wdwd5',
            'fax' =>  Str::random(5),
            'foundationLogo' => 'design/logo.png',
            'siteStatus' => rand(0,1),
            'jobsStatus' => rand(0,1),
            'keywords' => $this->faker->paragraph(),
        ];
    }
}
