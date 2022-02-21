<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customer1 extends FormRequest
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
            'SDT'  => 'required',
            'address'  => 'required',
            'email'  => 'required|email',
        ];

    }
    public function messages()
    {
        return [
            'name.required' => 'Tên khách hàng không được phép bỏ trống',
            'SDT.required' => 'SDT khách hàng không được phép bỏ trống',
            'address.required' => 'address khách hàng không được phép bỏ trống',
            'email.required' => 'email khách hàng không được phép bỏ trống',
            'name.min'   => 'Tên không được phép nhỏ hơn 10 kí tự',
            'email.email'   => 'nhập không đúng địa chỉ email',
        ];
    }
}
