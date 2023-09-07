<?php

namespace App\Http\Requests\doctors;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class DoctorUpdateRequest extends FormRequest
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
            'major_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'regex:/^01[0-2,5,9]{1}[0-9]{8}$/',Rule::unique('doctors')->ignore($this->id,'id'
            )],
            'email' => [
                'required','email',Rule::unique('doctors')->ignore($this->id,'id'
            )],
            'city' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
}
