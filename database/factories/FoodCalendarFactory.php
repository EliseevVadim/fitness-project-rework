<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\FoodCalendar;
use App\Models\UserMenu;

class FoodCalendarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FoodCalendar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_menu_id' => UserMenu::factory(),
            'day' => $this->faker->numberBetween(0, 30),
            'is_active' => false,
        ];
    }
}
