<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateJobListRequest extends FormRequest
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
            'title' => ['required','string'],
            'company' => ['required', 'unique:listings'],
            'location' => ['required','string'],
            'website' => ['required'],
            'employment_type' => ['required'],
            'email' => ['required', 'email'],
            'sallary_from' => ['required', 'numeric'],
            'sallary_to' => ['required', 'numeric'],
            'tags' => ['required'],
            // 'logo' => ['required'],
            'description' => ['required', 'max:300'],
        ];
    }
}
