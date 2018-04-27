<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class solicitudesRequest extends FormRequest
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
            'correo'=>'required|email',
            'asunto'=>'required|max:50',
            'telefono'=>'required|numeric|min:7',
            'solicitud'=>'required',
            'usuario_id'=>'required|numeric',
            'indrespuesta'=>'required',
        ];
    }
}
