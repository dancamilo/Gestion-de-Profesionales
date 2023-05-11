<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
         'id_typedocs' => $this->faker->word(),
         'id_profesionals' => $this->faker->word(),
        ];
    
    }
}
