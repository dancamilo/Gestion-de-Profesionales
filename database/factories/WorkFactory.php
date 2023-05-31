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
            'name' => $this->faker->jobTitle(),
            'startDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'endDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'details' => $this->faker->text(),
            'id_profesionals' => $this->faker->randomElement(DB::table('profesionals')->pluck('id')),
            'id_companies' => $this->faker->randomElement(DB::table('companies')->pluck('id')),
            'id_courses' => $this->faker->randomElement(DB::table('courses')->pluck('id')),
            
        ];
    }   
}
