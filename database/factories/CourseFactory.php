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
            'name' => $this->faker->word(),
            'term' => $this->faker->buildingNumber(),
            'id_areas' => $this->faker->randomElement(DB::table('areas')->pluck('id')),
            'details' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'observations' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'startDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'endDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'id_profesionals' => $this->faker->randomElement(DB::table('profesionals')->pluck('id')),
            'id_companies' => $this->faker->randomElement(DB::table('companies')->pluck('id')),
            
        ];
    }
}
