<?php

namespace App\Http\Requests;

use App\Models\capacitacioncliente;
use Illuminate\Foundation\Http\FormRequest;

class CreatecapacitacionclienteRequest extends FormRequest
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
        return capacitacioncliente::$rules;
    }

    public function messages()
    {
        return capacitacioncliente::$messages;
    }
}
