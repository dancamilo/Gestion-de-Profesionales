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
<<<<<<< Updated upstream
=======
        $activity = app('economicActivity')->generate();
        $locate = app('location')->generate();


>>>>>>> Stashed changes
        return [
            'name' => $this->faker->company(),
<<<<<<< Updated upstream
            'address' => $this->faker->address(),
            'RUT' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'telephone' => $this->faker->tollFreePhoneNumber(),
=======
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
>>>>>>> Stashed changes
            'email' => $this->faker->email(),
        ];
    }
}
