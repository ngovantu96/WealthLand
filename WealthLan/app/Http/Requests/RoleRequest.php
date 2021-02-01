<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name'   =>'required|min:2',
        ];
    }
    public function messages()
    {
        $messages = [
            'name.required'=>'trường này không được để trống.',
            'email.min'=>'it nhất 2 kí tự.',

        ];
        return $messages;
    }
}
