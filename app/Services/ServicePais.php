<?php

namespace App\Services;

use App\Pais;

class ServicePais
{
    public function getPais()
    {
        $servicePaises = Pais::get();
        $servicePaisesArray[''] = 'Selecciona un Pais';
        foreach ($servicePaises as $servicePais) {
            $servicePaisesArray[$servicePais->id] = $servicePais->Nombre;
        }

        return $servicePaisesArray;
    }
}

