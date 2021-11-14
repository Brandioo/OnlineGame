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
        return auth()->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'birthday' => 'required|date',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6'
        ];
    }
}
