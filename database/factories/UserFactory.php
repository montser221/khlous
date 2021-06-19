<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UsersCategories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Sequence;


class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->title(),
            'fullname' => $this->faker->name,
            // 'email' => $this->faker->unique()->safeEmail,
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'userCategoryIdTable'=> UsersCategories::all()->random()->userCategoryId,
            'userStatus' => 1,
        ];
    }
}
