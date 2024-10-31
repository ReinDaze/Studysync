<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->user()->id,
            'birth_place' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'school_origin' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
            'password' => 'nullable|min:6|confirmed',
        ];
    }
}
