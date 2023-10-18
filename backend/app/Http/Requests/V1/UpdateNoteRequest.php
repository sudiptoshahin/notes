<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNoteRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                "title" => ['required', 'max:255'],
                "text" => ['required', 'max:255'],
                "userId" => "required"
            ];
        } else {
            return [
                "title" => ['sometimes', 'required', 'max:255'],
                "text" => ['sometimes', 'required', 'max:255'],
                "userId" => ['sometimes', 'required']
            ];
        }
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => $this->userId
        ]);
    }
}
