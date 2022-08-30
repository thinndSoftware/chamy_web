<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            'config_key' => 'required|max:255',
            'config_value' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'config_key.required' => 'config key không để trống',
            'config_key.unique' => 'config key trùng đã tồn tại',
            'config_key.max' => 'config key tối đa 255 ký tự',
            'config_value.required' => 'A message is required',
        ];
    }
}
