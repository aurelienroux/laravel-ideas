<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class IdeaRequest extends FormRequest
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
            // 'idea' => ['required', 'min:10'],
            'description' => ['required', 'min:10']
        ];
    }

    public function messages(): array
    {
        return [
            // 'idea.required' => 'Custom message required for :attribute',
            'description.required' => 'Custom message required for :attribute',
        ];
    }
}
