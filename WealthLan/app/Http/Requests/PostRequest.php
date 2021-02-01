<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:2',
            'content' =>'required|min:2',
            'image' => 'mimes:jpeg,jpg,png|max:10000'
        ];
    }
    public function messages(){
        $messages = [
            'title.required'  => 'trường này không được để trống',
            'title.min'  =>'tối thiếu 2 kí tự',
            'content.required'=> 'trường này không được để trống',
            'content.min'=>'tối thiểu ít nhết 2 kí tự',
            'image.mimes'  => 'file không hợp lệ',
            'imge.max'  => 'file có kich thước quá lớn',
        ];
        return $messages;
    }
}
