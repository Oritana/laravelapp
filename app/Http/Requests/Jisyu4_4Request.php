<?php

namespace App\Http\Requests;

use App\Rules\Jisyu4_4Myrule;
use Illuminate\Foundation\Http\FormRequest;

class Jisyu4_4Request extends FormRequest
{
    public function authorize()
    {
        if ($this->path() ==  'jisyu9') {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'name' => 'required|max:10',
            'address' => 'required|max:20',
            'login_id' => ['required', 'between:8,16', new Jisyu4_4Myrule()],
            'password' => 'required|between:8,16',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力して下さい。',
            'name.max' => '名前は10文字以内で入力して下さい。',
            'address.required'  => '住所は必ず入力して下さい。',
            'address.max'  => '住所は20文字以内で入力して下さい。',
            'login_id.required' => 'ログインIDは必ず入力して下さい。',
            'login_id.between' => 'ログインIDは8文字以上16文字以内で入力して下さい。',
            'password.required' => 'パスワードは必ず入力して下さい。',
            'password.between' => 'パスワードは8文字以上16文字以内で入力して下さい。',
        ];
    }

}
