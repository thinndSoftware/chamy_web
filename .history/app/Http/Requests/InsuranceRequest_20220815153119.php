<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsuranceRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'order_id' => 'required',
            'product_id' => 'required',
            'status' => 'required'
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
            'name.required' => 'Tên không để trống',
            'phone.required' => 'Số điện thoại không để trống',
            'address.required' => 'Địa chỉ không để trống',
            'order_id.required' => 'Mã Hóa đơn không để trống',
            'product_id.required' => 'Mã Hóa đơn không để trống',
        ];
    }
}
