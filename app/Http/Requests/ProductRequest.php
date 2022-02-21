<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'   => 'required',
            'image'  => 'required',
            'sale'   => 'required',
            'price'    => 'required',
            'type_id'  => 'required',
            'title'  => 'required',
            'code'  => 'required',
            'origin'  => 'required',
            'color' => 'required'
        ];

    }
    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được phép bỏ trống',
            'image.required' => 'hình ảnh sản phẩm không được phép bỏ trống',
            'sale.required' => 'sale sản phẩm không được phép bỏ trống',
            'price.required' => 'giá sản phẩm không được phép bỏ trống',
            // 'sale.integer'   => 'sale là kí tự số',
            // 'price.integer'   => 'price là kí tự số',
            'title.required'   => 'title sản phẩm không được phép bỏ trống',
            'type_id.required'  => 'type_id sản phẩm không được phép bỏ trống',
            'code.required'   => 'mã sản phẩm không được phép bỏ trống',
            'origin.required'   => 'tên quốc gia phẩm không được phép bỏ trống',
            'color.required'   => 'màu sản phẩm không được phép bỏ trống',
        ];
    }
}
