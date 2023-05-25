<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'duracion' => $this->faker->buildingNumber(),
            'asistentes' => $this->faker->buildingNumber(),
            'valor' => $this->faker->longitude($min = 0, $max = 180),
            'id_profesionals' => $this->faker->randomElement([DB::table('profesionals')->pluck('id')->first()]),
            
        ];
    }
}
