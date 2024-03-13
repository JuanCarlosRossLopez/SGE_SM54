<?php

namespace App\Http\Requests\Anteprojects;

use Illuminate\Foundation\Http\FormRequest;

class AnteprojectsRequest extends FormRequest
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
            'anteproject_title' => 'required|string',
            'information' => 'required|string',
            'company_id' => 'required|exists:companies,id',
            'project_status_id' => 'required|exists:status_projects,id',
            'intership_id' => 'required|exists:interships,id',
            'start_date' => 'required|date',
            'finished_date' => 'required|date|after:start_date',
        ];
    }
}
