<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'question_text' => 'required|string|min:5',
            'question_number' => 'required|integer|min:1',
            'category_id' => 'required|exists:categories,id',
            'questionImage' => 'nullable|image|max:2048',
            'answers' => 'required|array',
            'answers.*.answer_text' => 'required|string|min:1',
            'answers.*.is_correct' => 'boolean',
            'answers.*.image' => 'nullable|image|max:2048',
        ];
    }
}
