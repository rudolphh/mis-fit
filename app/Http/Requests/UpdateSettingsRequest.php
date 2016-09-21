<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;// anyone can make this request (default false)
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
            'name' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'height' => 'required|numeric|between:0,299.99',
            'system' => 'required|in:imperial,metric',
            'goal' => 'required|in:loss,maint,gain',
            'activity_level' => 'required|in:A,B,C,D,E',
            'activity_mult' => 'required|numeric|between:1,1.99'
        ];
    }
}
