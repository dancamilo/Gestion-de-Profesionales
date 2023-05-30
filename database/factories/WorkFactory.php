<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class WorkFactory extends Factory
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
            'fecha_in' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'fecha_fi' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'descripcion' => $this->faker->text(),
            'id_profesionals' => $this->faker->randomElement(DB::table('profesionals')->pluck('id')),
            'id_companies' => $this->faker->randomElement(DB::table('companies')->pluck('id')),
            'id_courses' => $this->faker->randomElement(DB::table('courses')->pluck('id')),
            
        ];
    }   
}
