<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class ContactCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:20'],
            'email' => ['required', Rule::unique('contacts')->ignore($this->contact)],

            'phone' => ['required'],
            'state' => ['nullable', 'size:2'],
            'country' => ['required'],
            'city' => ['required'],
            'zip' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.min' => 'The name must be at least :min characters.',
            'name.max' => 'The name may not be greater than :max characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already taken.',
            'phone.required' => 'The phone field is required.',
            'state.size' => 'The state must be exactly :size characters.',
            'country.required' => 'The country field is required.',
            'city.required' => 'The city field is required.',
            'zip.required' => 'The zip code field is required.',
        ];
    }
}
