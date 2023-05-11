<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ContactsFactory extends Factory
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
            'numero' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'area' => $this->faker->word(),
            'id_companies' => $this->faker->randomElement(DB::table('companies')->pluck('id')),
            
        ];
    }
}
