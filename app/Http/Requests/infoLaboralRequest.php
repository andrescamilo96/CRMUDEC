<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class infoLaboralRequest extends FormRequest
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
            'cargo'=>'required',
            'descripcion'=>'required',
            'empresa'=>'required',
            'anoslaborados'=>'required|numeric',
            'rangoingresos'=>'required',
            
            'adjuntosoporte' =>'required',
            'usuario_id'=>'required',
            'telefonoempresa'=>'numeric',
            'ciudadempresa_id'=>'required',
        ];
    }
}
