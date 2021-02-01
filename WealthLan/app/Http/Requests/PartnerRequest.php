<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'title'=>'required:min:2',
            'description'=>'required|min:2'
        ];
    }
    public function messages()
    {
        $messages = [
            'name.required'=>'trường này không được để trống',
            'name.min'=>'tối thiểu 2 kí tự',
            'title.required' => 'trường này không được để trống',
            'title.min' =>'có tối thiểu 2 kí tự',
            'description.required' =>'trường này không được để trống',
            'description.min'=>'có tối thiểu 2 kí tự',
        ];
        return $messages;
    }
}
