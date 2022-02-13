<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cars_make = ['ford' ,'honda', 'toyota'];
        return [
            'make' => $this->faker->randomElement($cars_make),
            'model' => $this->faker->company,
            'year' => $this->faker->year,
        ];
    }
}
