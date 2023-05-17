<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\TypeDocs::factory()->create([
            'type' => 'tarjeta de identidad'
        ]);
        \App\Models\Companies::factory()->create([
            'nombre' => 'Kevin'
        ]);
        
        \App\Models\Contacts::factory(5)->create();
        
        
        \App\Models\Profiles::factory(5)->create();
        \App\Models\Profesionals::factory(5)->create();
        \App\Models\Documents::factory(5)->create();
        \App\Models\Courses::factory(5)->create();
        \App\Models\Works::factory(5)->create();
        \App\Models\Areas::factory(5)->create();
        \App\Models\Certifications::factory(5)->create();
        

    }
}
