<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'docIdentity' => $this->faker->numerify('###########'),
            'nameCnt' => $this->faker->name(),
            'appointment' => $this->faker->jobTitle(),
            'phoneCnt' => $this->faker->numerify('#######'),
            'cellular' => $this->faker->numerify('3#########'),
            'emailCnt' => $this->faker->unique()->safeEmail(),            
        ];
    }
}
