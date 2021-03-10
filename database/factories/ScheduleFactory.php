<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'num_of_days' => $this->faker->randomNumber($nbDigits = 2),
            'anchor_day' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'weather_factor_id' => $this->faker->unique()->randomNumber($nbDigits = 4),
            'season_factor_id' => $this->faker->unique()->randomNumber($nbDigits = 4),
        ];
    }
}