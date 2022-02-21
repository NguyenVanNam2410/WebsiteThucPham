<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryNewsRequest extends FormRequest
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
            'name' => 'required|unique:category_news,name|',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên danh mục tin tức không được phép bỏ trống',
            'name.unique'   => 'Tên không được phép trùng',
        ];
    }
}
