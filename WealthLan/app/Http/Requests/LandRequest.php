<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandRequest extends FormRequest
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
            'name'=>'required|min:2',
            'title'=>'required|min:2',
            'introductioncontent'=>'required|min2',
            'image'=>'required|mimes:jpeg,jpg,png|max:10000',
        ];
    }
    public function messages()
    {
       $messages = [
           'name.required'=>'trường này không được để trống',
           'name.min'=>'tối thiểu 2 kí tự',
           'title.required' => 'trường này không được để trống',
           'title.min'=>'tối thiểu 2 kí tự',
           'introductioncontent.required'=>'trường này không được để trống',
           'introductionContent.min'=>'tối thiểu 2 kí tự',
           'image.required'=>'bạn chưa tải ảnh lên',
           'image.mimes' => 'định dạng ảnh chưa hợp lệ',
           'image.max'=>'ảnh vượt quá giới hạn cho phép',
       ];
       return $messages;
    }
}
