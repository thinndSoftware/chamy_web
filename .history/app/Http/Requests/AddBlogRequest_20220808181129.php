<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBlogRequest extends FormRequest
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
            'name'=> 'required|unique:blogs',
            'slogan' =>'required|max:120',
            'image_link'=>'required',
            'content'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tiều đề bài viết không bỏ trống',
            'sologan.required' => 'Mô tả bài viết không bỏ trống',
            'sologan.max' => 'Không quá 120 ký tự',
            'image_link.required' => 'Ảnh đại diện bài viết',
            'content.required' => 'Nội dung bài viết không bỏ trống',
        ];
    }
}
