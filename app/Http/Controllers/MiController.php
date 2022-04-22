<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; //Poner Controler


class MiController extends Controller{ //debe llamarse igual al archivo e ir al route web.php
    public function prueba(){
        return 'estoy en un controlador ';
    }

    public function hola($nombre){
        // $j = $this->prueba();
        // echo $j;
        return 'Hola soy: ' . $nombre;
    }

}
