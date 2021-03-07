<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'image'=>'required|mimes:jpeg,jpg,png|max:10000',
        ];
    }
    public function messages()
    {
        $message = [
            'image.required' => 'bạn chưa tải ảnh lên',
            'image.mimes' =>'định dạng ảnh chưa đúng',
            'image.max'=>'kích thước vượt quá cho phép',
        ];
        return $message;
    }
}
