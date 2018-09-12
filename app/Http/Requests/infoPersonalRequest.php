<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class infoPersonalRequest extends FormRequest
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
            'telefono'=>'required|numeric',
            'anograduacion'=>'required|numeric|',
            'semestregraduacion'=>'required|numeric',
            'residencia' =>'required',
            'estadocivil' =>'required',
            'estrato'=>'required|numeric',
            'sexo'=>'required',
            'descripcionperfil'=>'required',
            'user_id'=>'required|numeric',
            'programa_id'=>'required|numeric',
            'ciudadresidencia_id'=>'required|numeric',
            


        ];
    }
}
