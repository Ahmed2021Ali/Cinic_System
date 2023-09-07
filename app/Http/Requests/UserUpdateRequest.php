<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string'],
            'phone' => ['required', 'regex:/^01[0-2,5,9]{1}[0-9]{8}$/',Rule::unique('users')->ignore($this->id,'id'
            )],
            'email' => [
                'required','email',Rule::unique('users')->ignore($this->id,'id'
            )],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
}
// 'required','email',Rule::unique('users')->ignore($this->user()->id,'id'
