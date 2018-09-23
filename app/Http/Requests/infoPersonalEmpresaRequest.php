<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class infoPersonalEmpresaRequest extends FormRequest
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
            //
            'nit'=>'required|numeric|max:9999999999999999|min:100000000',
            'razonsocial'=>'required|max:50',
            'sigla'=>'required|max:50',
            'email'=>'required|email',
            'direccion'=>'required|max:50',
            
            'ciudad_id' =>'required',
            'usuario_id'=>'required',
            'telefono'=>'required|numeric|max:99999999999',
            
        ];
    }
    public function messages()
{
  return [
    'nit.min' => 'El nit debe ser un número entre 9 y 15 digitos',
    'nit.max' => 'El nit debe ser un número entre 9 y 15 digitos',
    'email.email'=>'Debe digitar un correo electrónico valido',
    'telefono.numeric'=>'El telefono debe tener entre 7 y 11 digitos'
  ];
}
}
