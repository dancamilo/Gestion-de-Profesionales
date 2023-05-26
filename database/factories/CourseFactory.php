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
            'id_areas' => $this->faker->randomElement(DB::table('areas')->pluck('id')),
            'descripcion' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'observaciones' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'fecha_inicial' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'fecha_final' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'id_profesionals' => $this->faker->randomElement(DB::table('profesionals')->pluck('id')),
            'id_companies' => $this->faker->randomElement(DB::table('companies')->pluck('id')),
            
        ];
    }
}
