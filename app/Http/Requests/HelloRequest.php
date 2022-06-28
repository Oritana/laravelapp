<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Myrule;

class HelloRequest extends FormRequest
{
   public function rules()
    {
    return [
        'name' => 'required',
        'mail' => 'email',
        'age' => ['numeric', new Myrule(5)],
    ];
    }
}