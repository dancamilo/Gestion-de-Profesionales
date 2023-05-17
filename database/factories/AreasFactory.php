<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class AreasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_profesionals' => $this->faker->randomElement([DB::table('profesionals')->pluck('id')->first()]),
            'id_profiles' => $this->faker->randomElement([DB::table('profiles')->pluck('id')->first()]),
        ];
    }
}
