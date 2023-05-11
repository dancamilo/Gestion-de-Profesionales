<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class DocumentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
         'id_typedocs' => $this->faker->randomElement(DB::table('type_docs')->pluck('id')),
         'id_profesionals' => $this->faker->randomElement(DB::table('profesionals')->pluck('id')),
        ];
    
    }
}
