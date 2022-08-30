<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:sliders|max:255|min:10',
            'description' => 'required',
            'image_link' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên slider không để trống',
            'name.unique' => 'Tên slider bị trùng',
            'name.max' => 'Tên slider tối đa 255 ký tự',
            'name.min'=>'Tên có ít nhất 10 ký tự',
            'image_link.required' => 'ảnh slider không để trống',
            'description.required' => 'Mô tả slider không để trống',
        ];
    }
}
