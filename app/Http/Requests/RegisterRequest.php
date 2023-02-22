<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        'username' => ['required','unique:users,username'],
        'email' => ['required','unique:users,email','email'],
        'password' => ['required','min:5'],
      ];
    }

    public function messages(){
      return [
        'username.required' => 'Kolom username wajib diisi',
        'username.unique' => 'Username sudah ada, cari username lain',
        'email.required' => 'Kolom email wajib diisi',
        'email.unique' => 'Email sudah ada, cari email lain',
        'password.required' => 'Kolom password wajib diisi',
        'password.min' => 'Password minimal terdiri dari 5 karakter',
      ];
    }
}
