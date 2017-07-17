<?php

namespace sistema_pedidos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //definimos reglas de atributos de la tabla
            'descripcion'=>'required|max:45',
            'precio'=>'required|max:45',
        ];
    }
}
