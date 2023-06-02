<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_profesionals' => $this->faker->randomElement(DB::table('profesionals')->pluck('id')),
            'id_profiles' => $this->faker->randomElement(DB::table('profiles')->pluck('id')),
            'name' => $this->faker->text()
        ];
    }
}
