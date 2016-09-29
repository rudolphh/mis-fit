<?php

namespace App\Http\Requests;

use App\Measurement;
use Illuminate\Foundation\Http\FormRequest;

class EditMeasurementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // $user = Auth()->user();
        // $measurement = Measurement::findOrFail( $this->id );  // $id is a route parameter

        // return $measurement->user_id === $user->id;
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
