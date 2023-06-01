<?php

namespace App\Utils;

class LocationGenerator
{
    protected $locates = [
        'Usaquén',
        'Chapinero',
        'Santa Fe',
        'San Cristobal',
        'Usme',
        'Tunjuelito',
        'Bosa',
        'Kennedy',
        'Fontibón',
        'Engativá',
        'Suba',
        'Barrios Unidos',
        'Teusaquillo',
        'Los Mártires',
        'Antonio Nariño',
        'Puente Aranda',
        'La Candelaria',
        'Rafael Uribe Uribe',
        'Ciudad Bolivar',
        'Sumapaz',
        'Fuera de Bogotá'
    ];

    public function generate()
    {
        return $this->locates[array_rand($this->locates)];
    }
}