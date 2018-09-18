<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editinfolaboralrequest extends FormRequest
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
            'cargo'=>'required|max:50|min:5',
            'descripcion'=>'required|max:200|min:10',
            'empresa'=>'required|max:50',
            'anoslaborados'=>'required|numeric|min:1|max:20',
            'rangoingresos'=>'required|max:50',            
            'adjuntosoporte'=>'required',
            'usuario_id'=>'required',
            'telefonoempresa'=>'numeric|min:1001010|max:9999999999',
            'ciudadempresa_id'=>'required', 
        ];
    }
}
