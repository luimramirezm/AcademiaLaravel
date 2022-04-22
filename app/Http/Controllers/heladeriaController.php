<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class heladeriaController extends Controller{
    public function cubierta($numCubierta){

        if ($numCubierta == 1){
            $numCubierta = 'Chocolate';
            return 'El topping escogido es: ' . $numCubierta . ' y su precio es $500. El valor total a pagar por el helado es $3.500';
        }
        else if ($numCubierta == 2){
            $numCubierta= 'Brownie';
            return 'El topping escogido es: ' . $numCubierta . ' y su precio es $1.000. El valor total a pagar por el helado es $4.000';
        }
        else if ($numCubierta == 3){
            $numCubierta= 'Delicatessen';
            return 'El topping escogido es: ' . $numCubierta . ' y su precio es $1.500. El valor total a pagar por el helado es $4.500';
        }
        else if ($numCubierta == 4){
            $numCubierta= 'Sin cubierta';
            return 'El topping escogido es: ' . $numCubierta . ' El valor total a pagar por el helado es $3.000';
        }
        else{
            return 'Opción no válida';
        }
    }
    //
}
