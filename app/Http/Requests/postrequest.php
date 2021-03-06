<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postrequest extends FormRequest
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
            'Titulo'=>'required|max:190',
            'Cuerpo'=>'required|max:1000',
        ];
    }
}
