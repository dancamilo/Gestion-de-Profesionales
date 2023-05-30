<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CertificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'obsDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'details' => $this->faker->text(),
            'id_courses' => $this->faker->randomElement(DB::table('courses')->pluck('id')),
            
        ];
    }
}
