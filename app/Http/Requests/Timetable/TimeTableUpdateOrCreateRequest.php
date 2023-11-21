<?php

namespace App\Http\Requests\Timetable;

use Illuminate\Foundation\Http\FormRequest;

class TimeTableUpdateOrCreateRequest extends FormRequest
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
            'curriculum_id' => ['integer', 'required', 'exists:curricula,id'],
            'lecture_id'    => ['integer', 'required', 'exists:lectures,id'],
            'lecture_queue' => ['integer','required'],
        ];
    }
}
