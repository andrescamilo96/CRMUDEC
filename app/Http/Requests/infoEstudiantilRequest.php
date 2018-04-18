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
            'titulo' => 'required',
            'anofinalizacion' => 'required|numeric',
            'institucion' => 'required',
            'adjuntosoporte' => 'required',
            'usuario_id' => 'required',
            'tipoestudio_id' => 'required',
        ];
    }
}
