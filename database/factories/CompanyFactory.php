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
        $locate = app('location')->generate();


        return [
            'nameCmp' => $this->faker->company(),
            'id_contacts' => $this->faker->randomElement(DB::table('contacts')->pluck('id')),
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
            'phoneCmp' => $this->faker->numerify('#######'),
            'emailCmp' => $this->faker->email(),
            'webPage' => $this->faker->url()
        ];
    }
}
