<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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

        return [
            'id_contacts' => $this->faker->randomElement(DB::table('contacts')->pluck('id')),
            'name' => $this->faker->company(),
            'bussName' => $this->faker->companySuffix(),
            'country' => $this->faker->country(['Colombia']),
            'location'=> $this->faker->city(),
            'address' => $this->faker->address(),
            'check' => $this->faker->randomNumber('######',$nbDigits = NULL, $strict = false),
            'RUT' => $this->faker->randomNumber('#########-#',$nbDigits = NULL, $strict = false),
            'ecoActivity' => $activity,
            'employees' => $this->faker->numerify('####'),
            'compSize' => $this->faker->randomElement(['micro','pequeña','mediana','grande']),
            'telephone' => $this->faker->numerify('#######'),
            'email' => $this->faker->email(),
            'webPage' => $this->faker->url()
        ];
    }
}
