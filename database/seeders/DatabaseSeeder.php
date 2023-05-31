<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Factories\EconomicActivityProvider;


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
        \App\Models\TypeDoc::factory()->create([
            'type' => 'tarjeta de identidad'
        ]);
        \App\Models\Contact::factory(5)->create();
        \App\Models\Company::factory(5)->create();
        \App\Models\Profesional::factory(5)->create();
        \App\Models\Document::factory(5)->create();
        \App\Models\Profile::factory(5)->create();
        \App\Models\Area::factory(5)->create();
        \App\Models\Course::factory(5)->create();
        \App\Models\Work::factory(5)->create();
        \App\Models\Certification::factory(5)->create();
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
        \App\Models\Historial::factory(10)->create();
    }
}
