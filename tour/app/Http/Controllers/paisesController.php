<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pais;

class paisesController extends Controller
{
    public function listadoPaises(){
      $paises=Pais::all();

      dd($paises);

      $vac=compact($paises);

      return view('/pruebaPaises',$vac);
    }
    public function nombrePais(){
      $paises=Pais::all();
      foreach ($paises as $pais) {
        return $pais->nombre;
      }
    }
}
