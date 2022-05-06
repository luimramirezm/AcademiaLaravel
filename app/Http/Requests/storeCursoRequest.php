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
            'imagen'=>'required|image' // imagen debe ser una imagen
        ];
    }
}
