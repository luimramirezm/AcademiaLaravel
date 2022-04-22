<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrecios extends Controller{
    public function precio($canPrecio){

        if ($canPrecio <= 100000){
            return 'Este producto no tiene descuento. Total: ' . $canPrecio;
        }
        else if ($canPrecio >= 100000 and $canPrecio <= 150000){
            return 'El descuento del producto es del 2%, y el total a
            pagar es:  ' . ($canPrecio * 0.02);
        }
        else if ($canPrecio >= 150000 and $canPrecio <= 300000){
            return 'El descuento del producto es del
            3%, y el total a pagar es:  ' . ($canPrecio * 0.03);
        }
        else if ($canPrecio >= 300000 and $canPrecio <= 500000){
            return 'El descuento del producto es del 4%, y el
            total a pagar es de: ' . ($canPrecio * 0.04);
        }
        else if ($canPrecio >= 500000){
            return 'El descuento del producto es del 5%, y el total
            a pagar es de: ' . ($canPrecio * 0.05);
        }
        else{
            return 'El valor ingresado es incorrecto. Inténtelo nuevamente';
        }
    }

    public function getIVA($nombreart, $canPrecio){
        $IVA = 0.19;
        return 'El artículo ' . $nombreart . ' sin IVA cuesta: '. $canPrecio . ' y el precio del IVA es de ' . ($canPrecio * $IVA) . ' El total a pagar por el artículo es de: ' . ($canPrecio + $canPrecio * $IVA);
    }
}
