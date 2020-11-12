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
            'password' => 'required|min:7',
            'confirm_password' => 'required|same:password',
        ];
    }
    public function messages()
    {
      return [
        'name.required' => 'nameを入力してください',
        'email.required' => 'emailを入力してください',
        'password.required' => 'passwordを入力してください',
        'password.min' => 'passwordは7文字以上で入力してください',
        'confirm_password.required' => 'confirm_passwordを入力してください',
        'confirm_password.same' => 'confirm_passwordが異なります',
      ];
    }
}
