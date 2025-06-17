<?php

namespace App\Http\Requests\Enterprise;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnterpriseRequest extends FormRequest
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
            'fantasy_name' => ['required', 'string', 'max:255'],
            'cnpj'         => ['required', 'string', 'max:20', 'unique:enterprises,cnpj'],
            'email'        => ['required', 'string', 'email', 'max:150', 'unique:enterprises,email'],
            'phone'        => ['required', 'string', 'max:20', 'unique:enterprises,phone'],
            'status'       => ['required', 'in:0,1'],
            'user_id'      => ['required', 'exists:users,id'],
            'address'      => ['nullable', 'string', 'max:150'],
            'city'         => ['nullable', 'string', 'max:150'],
            'number'       => ['nullable', 'string', 'max:20'],
            'complement'   => ['nullable', 'string', 'max:150'],
        ];
    }

    public function messages(): array
    {
        return [
            'fantasy_name.required' => 'The Fantasy Name field is required.',
            'cnpj.required' => 'The CNPJ field is required.',
            'cnpj.unique' => 'The CNPJ already exists.',
            'email.required' => 'The Email field is required.',
            'email.unique' => 'The Email already exists.',
            'phone.required' => 'The Phone field is required.',
            'phone.unique' => 'The Phone already exists.',
            'status.required' => 'The Status field is required.',
            'user_id.required' => 'The User ID field is required.',
            'address' => 'The Address field is required.',
            'city' => 'The City field is required.',
            'number' => 'The Number field is required.',
            'complement' => 'The complement field is required.',
        ];
    }
}
