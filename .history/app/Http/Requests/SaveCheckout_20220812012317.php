<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCheckout extends FormRequest
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
            'address_wards' => 'required',
            'address_detail' => 'required',
            'address_city' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
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
            'name.required' => 'Họ tên không để trống',
            'address_wards.required' => 'Nhập xã (phường) nơi nhận',
            'address_detail.required' => 'Nhập địa chỉ cụ thể nơi nhận',
            'address_city.required' => 'Nhập tỉnh (thành phố ) nơi nhận',
            'email.required' => 'Không để trống email',
            'email.email'=>'Email chưa đúng định dạng'
        ];
    }
}
