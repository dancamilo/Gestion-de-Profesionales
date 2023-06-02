<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $activity = app('economicActivity')->generate();
        $locate = app('location')->generate();


        return [
            'name' => $this->faker->company(),
            'bussName' => $this->faker->companySuffix(),
            'country' => $this->faker->country(),
            'location'=> $locate,
            'address' => $this->faker->address(),
            'NIT' => $this->faker->numerify('###.###.###'),
            'check' => $this->faker->numerify('######'),
            'RUT' => $this->faker->numerify('#########-#'),
            'ecoActivity' => $activity,
            'employees' => $this->faker->numerify('####'),
            'compSize' => $this->faker->randomElement(['micro -','pequeña','mediana','grande']),
            'telephone' => $this->faker->numerify('#######'),
            'email' => $this->faker->email(),
        ];
    }
}
