<?php

namespace App\Utils;

class EconomicActivityGenerator
{
    protected $activities = [
        'Comercio al por mayor',
        'Comercio al por menor',
        'Industria manufacturera',
        'Servicios profesionales',
        'Producción de bienes',
        'Tecnologia',
        'Telecomunicación',
        'Eventos',
        'Publicidad',
        'Producción agricola',
        'Producción de bienes y servicios',
        'Comercio',
        'Mineria',
        'Turismo',
        'Comercio internacional',
        'Exportación e importaciones',
        'Industria textil',
        'Industria farmacéutica',
        'Industria automotriz',
        'Industria petrolera',
        'Otra'
    ];

    public function generate()
    {
        return $this->activities[array_rand($this->activities)];
    }
}