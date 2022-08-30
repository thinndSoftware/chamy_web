<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBlogRequest extends FormRequest
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
            'name'=>'required',
            'sologan'=>'required|max:120',
            'image_link'=>'required',
            'content'=>'required',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Tiêu đề bài viết không để trống',
            'sologan.required' => 'Mô tả bài viết không để trống',
            'sologan.max' => 'Không quá 120 ký tự',
            'image_link.required' => 'Ảnh đại diện bài viết không để trống',
            'content.required' => 'Nội dung bài viết không để trống',
        ];
    }
}
