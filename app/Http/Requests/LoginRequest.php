<?php

namespace App\Http\Requests;
use Laravel\Fortify\Fortify;

class LoginRequest extends CustomRequest
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
        $data                   = Request()->all();
        $validation[Fortify::username()]    = 'mb_required|max:255|halfsize';
        $validation["password"] = 'mb_required|max:255';
        return $validation;
    }

    public function attributes()
    {
        return [
            'email'     => 'メールアドレス',
            'password' => 'パスワード',
        ];
    }

    public function messages()
    {
        return [
            'email.max'    => 'メールアドレスは255文字以下で入力してください。',
            'email.mb_required' => 'メールアドレスを入力してください。',
            'password.max' => 'パスワードは255文字以下で入力してください。',
            'password.mb_required' => 'パスワードを入力してください。',
        ];
    }
}
