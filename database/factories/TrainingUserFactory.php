<?php

namespace Database\Factories;

use App\Models\TrainingLocation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Training;
use App\Models\TrainingUser;
use App\Models\User;

class TrainingUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TrainingUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'training_id' => Training::factory(),
            'training_location_id' => TrainingLocation::factory(),
        ];
    }
}
