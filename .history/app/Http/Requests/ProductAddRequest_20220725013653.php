<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'name' => 'required|unique:products|max:255|min:10',
            'category_id'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'description'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'tên sản phẩm không được để trống',
            'name.unique' =>'cột name đang bị trùng',
            'name.max'=>'sso ký tự tối đa là 255',
            'name.min'=> 'Số lượng ký tự tối thiểu là 10',
            'category_id.required' => 'A message is required',
            'price.required' => 'A message is required',
            'discount.required' => 'A message is required',
            'description.' => 'A message is required',
        ];
    }
}
