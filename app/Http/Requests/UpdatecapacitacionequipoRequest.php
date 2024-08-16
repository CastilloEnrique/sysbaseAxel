<?php

namespace App\Http\Requests;

use App\Models\capacitacionequipo;
use Illuminate\Foundation\Http\FormRequest;

class UpdatecapacitacionequipoRequest extends FormRequest
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
        $rules = capacitacionequipo::$rules;
        
        return $rules;
    }

    public function messages()
    {
        return capacitacionequipo::$messages;
    }
}
