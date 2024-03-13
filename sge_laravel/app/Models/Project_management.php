<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_management extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'student_group',
        'student_email',
        'student_phone',
        'project_title',
        'project_company',
        'project_advisor',
        'project_advisor_phone',
        'general_objective',
        'problem_statement',
        'justification',
        'activities',
        'start_date',
        'end_date',
    ];

    protected $table = 'project_management';
}
