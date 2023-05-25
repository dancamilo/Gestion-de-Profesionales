<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->company(),
            'direccion' => $this->faker->address(),
            'rut' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'telefono' => $this->faker->tollFreePhoneNumber(),
            'email' => $this->faker->email(),
        ];
    }
}
