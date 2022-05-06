<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //Debe retornar un True para poder que valide
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|max:10', //nombre debe cumplir con un maximo de 10 digitos
            'imagen'=>'required|image', // imagen debe ser una imagen
            'imagen' => 'mimes:jpg,bmp,png', //Estamos validando que sea un archivo jpg o bmp de resto no lo acepte
            'email' => 'email:rfc,dns', // utiliza el egulias/email-validatorpaquete para validar la dirección de correo electrónico. De forma predeterminada,
            //'imagen'=>'required|mimetypes:jpg', //realiza lo mismo q el campo de mimes
            //'imagen' => 'dimensions:min_width=8000,min_height=600', //obliga que las dimensiones sean mayores a lso valores q pongamos
            //'imagen' => 'file|size:500' //obliga que el tamaño de la imagen sea el que pusimos

        ];
    }
}
