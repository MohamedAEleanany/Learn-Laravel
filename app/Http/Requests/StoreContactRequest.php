<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
             'first_name'=> 'required|string|min:3|max:50',
            'last_name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'message' => 'required|max:255'
        ];
    }


     public function messages(): array
    {
        return [
            'first_name.required' => 'Required !!!',
            'last_name.required' => "the last name is required",
            'email.email'  => " the email must as @ like @gmail.com" 
        ];
    }
}
