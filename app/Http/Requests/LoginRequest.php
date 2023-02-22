<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => ['required','email'],
            'password' => ['required','min:5']
        ];
    }

    // Own customizing message error
    public function messages(){
      return[
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Harus sesuai dengan format email',
        'password.required' => 'Password wajib diisi',
        'password.min' => 'Password minimal terdiri dari 5 karakter',
      ];
    }
}
