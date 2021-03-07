<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email'=>'required',
            'password'=>'required|min:6|max:30',
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required'=>'trường này không được để trống.',
            'email.required'=>'trường này không được để trống.',
            'email.unique'=>'email này đã tồn tại.',
            'password.required'=>'trường này không được để trống.',
            'password.min'=>'mật khẩu của bạn quá ngắn, 6-30 kí tự.',
            'password.max'=>'mật khẩu của bạn có tối đa 30 kí tự.',
            ];
        return $messages;
    }
}
