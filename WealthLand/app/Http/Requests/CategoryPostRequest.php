<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryPostRequest extends FormRequest
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
            'title'=>'required|min:2',
        ];
    }
    public function messages()
    {
        $messages = [
            'title.required' => 'trường này không được để trống',
            'title.min'=>'tối thiếu 2 kí tự',
        ];
        return $messages;
    }
}
