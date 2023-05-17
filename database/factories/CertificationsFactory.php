<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CertificationsFactory extends Factory
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
            'fecha_ob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'descripcion' => $this->faker->text(),
            'id_courses' => $this->faker->randomElement(DB::table('courses')->pluck('id')),
            
        ];
    }
}
