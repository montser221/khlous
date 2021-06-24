<?php

namespace Database\Factories;

use App\Models\UsersCategories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class UsersCategoriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsersCategories::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userCategoryName'=> 'كل المستخدمين',
        ];
    }
}
