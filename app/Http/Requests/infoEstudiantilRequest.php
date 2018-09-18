<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class infoEstudiantilRequest extends FormRequest
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
            'titulo' => 'required|max:200|min:5',
            'anofinalizacion' => 'required|numeric|min:1990|max:2020',
            'institucion' => 'required|max:50',
            'adjuntosoporte' => 'required|mimes:pdf',
            'usuario_id' => 'required',
            'tipoestudio_id' => 'required',
            'certificadoconvalidacion'=>'mimes:pdf',

        ];
    }
}
