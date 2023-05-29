<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Rol::factory()->create([
            'rol' => 'Educación Contínua'
        ]);
        \App\Models\Rol::factory()->create([
            'rol' => 'Relacionamiento'
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\TypeDocs::factory()->create([
            'type' => 'tarjeta de identidad'
        ]);
        \App\Models\Companies::factory(5)->create();
        \App\Models\Contacts::factory(5)->create();
        \App\Models\Profesionals::factory(5)->create();
        \App\Models\Documents::factory(5)->create();
        \App\Models\Profiles::factory(5)->create();
        \App\Models\Areas::factory(5)->create();
        \App\Models\Course::factory(5)->create();
        \App\Models\Works::factory(5)->create();
        \App\Models\Certifications::factory(5)->create();
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'id_rols' => '1',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'rela',
            'email' => 'rela@gmail.com',
            'password' => Hash::make('admin123'),
            'id_rols' => '2',
        ]);
    }
}
