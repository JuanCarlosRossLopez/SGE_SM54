<?php

namespace App\Http\Requests\Students;

use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'student_name' => 'required|string',
            'id_student' => 'required|integer',
            'project_creator' => 'required|string',
            'strike' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'division_id' => 'required|exists:divisions,id',
            'anteproject_id' => 'required|exists:anteprojects,id',
            'adviser_id' => 'required|exists:teachers,id',
            'evaluation_date_id' => 'required|exists:activity_histories,id',
        ];
    }
}
