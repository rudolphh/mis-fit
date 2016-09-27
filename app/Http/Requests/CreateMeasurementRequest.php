<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMeasurementRequest extends FormRequest
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
            'weight' => 'required|numeric|between:0,700',
            'neck' => 'required|numeric|between:0,100',
            'waist' => 'required|numeric|between:0,300',
            'hip' => 'numeric|between:0,400',
        ];
    }
}
