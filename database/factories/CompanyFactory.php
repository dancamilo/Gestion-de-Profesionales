<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'RUT' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'telephone' => $this->faker->tollFreePhoneNumber(),
            'email' => $this->faker->email(),
        ];
    }
}
