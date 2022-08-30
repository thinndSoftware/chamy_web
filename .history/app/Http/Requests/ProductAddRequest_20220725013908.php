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
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.unique' =>'Cột name đang bị trùng',
            'name.max'=>'Số ký tự tối đa là 255',
            'name.min'=> 'Số lượng ký tự tối thiểu là 10',
            'category_id.required' => 'Danh mục không được để trống',
            'price.required' => 'Không để trống giá sản phẩm',
            'discount.required' => 'Không đê trống giá khuyến mại',
            'description.required' => 'Không để trống mô tả sản phẩm',
        ];
    }
}
