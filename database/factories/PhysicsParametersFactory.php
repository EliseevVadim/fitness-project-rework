<?php

namespace Database\Factories;

use App\Models\Training;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PhysicsParameters;
use App\Models\User;

class PhysicsParametersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhysicsParameters::class;

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
            'phase_number' => $this->faker->numberBetween(0, 0, 1000),
            'photoes' => '{}',
            'weight' => $this->faker->randomFloat(0, 0, 1000.),
            'height' => $this->faker->randomFloat(0, 0, 1000.),
            'dream_weight' => $this->faker->randomFloat(0, 0, 1000.),
            'current_weight' => $this->faker->randomFloat(0, 0, 1000.),
            'hips_cm' => $this->faker->randomFloat(0, 0, 1000.),
            'waist_cm' => $this->faker->randomFloat(0, 0, 1000.),
            'chest_cm' => $this->faker->randomFloat(0, 0, 1000.),
        ];
    }
}
