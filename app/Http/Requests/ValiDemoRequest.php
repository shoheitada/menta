<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiDemoRequest extends FormRequest
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
            //
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_passwaord' => 'required',
        ];
    }
    public function messages()
    {
      return [
        'name.required' => 'nameを入力してください',
        'email.required' => 'emailを入力してください',
        'password.required' => 'passwaordを入力してください',
        'confirm_passwaord.required' => 'confirm_passwaordを入力してください',
        
      ];
    }
}
