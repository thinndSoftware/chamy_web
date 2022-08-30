<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAccountRequest extends FormRequest
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
            'email'=> 'required|email|unique:users,email',
            'password'=>'required',
            'password_confirmation'=> 'required|confirmed'
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
            'email.required' => 'Email không để trống',
            'email.email' => 'Nhập email không đúng định dạng',
            'email.unique' => 'Email đã được sử dụng',
            'password.required' => 'Password không để trống',
            'password_confirmation.required' => 'Password không để trống',
            'password_confirmation.confirmed' => 'Password không không khớp',
        ];
    }
}
