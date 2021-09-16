<?php

namespace Database\Factories;

use App\Models\Runner;
use Illuminate\Database\Eloquent\Factories\Factory;

class RunnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Runner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genders = [Runner::GENDER_MALE, Runner::GENDER_FEMALE];
        $colors = [Runner::COLOR_WHITE, Runner::COLOR_BLACK];

        return [
            'race_id' => $this->faker->randomDigitNotZero(),
            'name' => $this->faker->name(),
            'age' => $this->faker->randomNumber(2),
            'sex' => $this->faker->randomElement($genders),
            'color' => $this->faker->randomElement($colors)
        ];
    }
}
