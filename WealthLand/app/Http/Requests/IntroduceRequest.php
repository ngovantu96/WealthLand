<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntroduceRequest extends FormRequest
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
            'description' =>'required|min:2',
            'sologan'=>'required|min:2',
            'content'=>'required|min:2'
        ];
    }
    public function messages()
    {
        $messages = [
            'title.required'=>'trường này không được để trống',
            'title.min'     =>'tối thiểu 2 kí tự',
            'description.required' =>'trường này không được để trống',
            'description.min'=>'tối thiểu 2 kí tự',
            'sologan.required' => 'trường này không được để trống',
            'sologan.min' => 'tối thiểu 2 kí tự',
            'content.required' =>'trường này không được để trống',
            'content.min' => 'tối thiểu 2 kí tự',
        ];
        return $messages;
    }
}
